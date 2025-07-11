import React, { useState, useEffect, useMemo } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { ExecutiveList } from '@/services/generalservice';
import type { Executive } from '@/services/generalservice';

interface OptionType {
  value: any;
  label: string;
}

interface ExecutiveSelectProps {
  value: any;
  onChange: (selected: OptionType | null) => void;
  required?: boolean;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
  placeholder?: string;
  showDefaultOption?: boolean;
  showAllOption?: boolean;
}

const ExecutiveSelect: React.FC<ExecutiveSelectProps> = ({
  value,
  onChange,
  disabled = false,
  label = 'Executive',
  name = 'executiveVal',
  className = '',
  placeholder,
  showDefaultOption = true,
  showAllOption = false,
}) => {
  const [executives, setExecutives] = useState<OptionType[]>([]);
  const [loading, setLoading] = useState<boolean>(true);

  const computedPlaceholder = useMemo(() => {
    return placeholder || (showAllOption ? 'All Executives' : `Select ${label}`);
  }, [placeholder, showAllOption, label]);

  useEffect(() => {
    let isMounted = true;
    const user = getUserInfo();

    const fetchExecutives = async () => {
      setLoading(true);
      try {
        if (user?.id && user?.access_token &&  user?.type && user?.region) {
          const data = await ExecutiveList(user.id, user.access_token, user.region,user.type);

          const formatted = data.map((exec: Executive) => ({
            value: exec.id,
            label: exec.display_name,
          }));

          const defaultOption = { value: 0, label: computedPlaceholder };

          if (isMounted) {
            setExecutives(showDefaultOption ? [defaultOption, ...formatted] : formatted);
          }
        } else {
          if (isMounted) setExecutives([]);
        }
      } catch (error) {
        console.error('Error fetching executives:', error);
        if (isMounted) setExecutives([]);
      } finally {
        if (isMounted) setLoading(false);
      }
    };

    fetchExecutives();

    return () => {
      isMounted = false;
    };
  }, [computedPlaceholder, showDefaultOption]);

  const selectedOption = executives.find((option) => option.value === value) || null;

  return (
    <div className={className}>
      {/* {label && (
        <label htmlFor={name} className="block text-sm font-medium text-gray-700 mb-1">
          {label}
        </label>
      )} */}
      <Select
        id={name}
        name={name}
        isDisabled={disabled || loading}
        isLoading={loading}
        options={executives}
        value={selectedOption}
        onChange={onChange}
        isClearable={true}
        placeholder={computedPlaceholder}
        noOptionsMessage={() => (loading ? 'Loading...' : 'No executives found')}
      />
    </div>
  );
};

export default ExecutiveSelect;
