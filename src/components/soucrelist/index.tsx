import React, { useState, useEffect } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { SourceList } from '@/services/generalservice';
import type { Source } from '@/services/generalservice';

interface OptionType {
  value: any;
  label: string;
}

interface SourceSelectProps {
  value: any | null;
  onChange: (selected: OptionType | null) => void;
  required?: boolean;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
  start?: string;
  placeholder?: string; // allows "Select Source", "All Sources", etc.
}

const SourceSelect: React.FC<SourceSelectProps> = ({
  value,
  onChange,
  required = false,
  disabled = false,
  label = 'Source',
  name = 'sourceVal',
  className = '',
  start = '0',
  placeholder,
}) => {
  const [sources, setSources] = useState<OptionType[]>([]);
  const [loading, setLoading] = useState(true);

  const user = getUserInfo();

  useEffect(() => {
    const fetchSources = async () => {
      setLoading(true);
      try {
        if (user?.id && user?.access_token) {
          const data = await SourceList(user.id, user.access_token, start);
          const formatted = data.map((src: Source) => ({
            value: src.id,
            label: src.display_name,
          }));

          const defaultLabel = placeholder || 'Select Source';
          const defaultOption = { value: 0, label: defaultLabel };

          setSources([defaultOption, ...formatted]);
        } else {
          setSources([]);
        }
      } catch (error) {
        console.error('Error fetching sources:', error);
        setSources([]);
      } finally {
        setLoading(false);
      }
    };

    fetchSources();
  }, [start, user?.id, user?.access_token, placeholder]);

  const selectedOption = sources.find((option) => option.value === value) || null;

  const handleChange = (selected: OptionType | null) => {
    if (selected?.value === 0) {
      onChange(null); // treat default option like no selection
    } else {
      onChange(selected);
    }
  };

  return (
    <div className={className}>
      {/* {label && (
        <label htmlFor={name}>
          {label} {required && '*'}
        </label>
      )} */}
      <Select
        id={name}
        name={name}
        isDisabled={disabled || loading}
        isLoading={loading}
        options={sources}
        value={selectedOption}
        onChange={handleChange}
        isClearable={!required}
        placeholder={placeholder || `Select ${label}`}
      />
    </div>
  );
};

export default SourceSelect;
