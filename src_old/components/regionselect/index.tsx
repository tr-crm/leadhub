import React, { useEffect, useState, useMemo } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { RegionList } from '@/services/generalservice';
import type { Region } from '@/services/generalservice';

interface OptionType {
  value: string;
  label: string;
}

interface RegionSelectProps {
  value: string;
  onChange: (selected: OptionType | null) => void;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
  placeholder?: string;
  type?: string;
}

const RegionSelect: React.FC<RegionSelectProps> = ({
  value,
  onChange,
  disabled = false,
  label = 'Region',
  name = 'regionVal',
  className = '',
  placeholder,
  type = '',
}) => {
  const [regions, setRegions] = useState<OptionType[]>([]);
  const [loading, setLoading] = useState(true);

  const user = getUserInfo();

  useEffect(() => {
    const fetchRegions = async () => {
      setLoading(true);
      try {
        if (user?.id && user?.access_token && user?.type && user?.region) {
          const data = await RegionList(user.id, user.access_token, user.region, user.type);

          const formatted = data.map((region: Region) => ({
            value: String(region.id), // store as string for consistency
            label: region.display_name,
          }));

          const defaultOption = {
            value: '0',
            label: placeholder || `Select ${label}`,
          };

          setRegions([defaultOption, ...formatted]);
        } else {
          setRegions([]);
        }
      } catch (error) {
        console.error('Error fetching region list:', error);
        setRegions([]);
      } finally {
        setLoading(false);
      }
    };

    fetchRegions();
  }, [user?.id, user?.access_token, placeholder, label, type]);

  const selectedOption = useMemo(
    () => regions.find((option) => option.value === String(value)) || null,
    [value, regions]
  );

  return (
    <div className={className}>
      <Select
        id={name}
        name={name}
        isDisabled={disabled || loading}
        isLoading={loading}
        options={regions}
        value={selectedOption}
        onChange={onChange}
        isClearable={true}
        placeholder={placeholder || `Select ${label}`}
      />
    </div>
  );
};

export default RegionSelect;
