import React, { useState, useEffect } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { StatusList } from '@/services/generalservice';
import type { Status } from '@/services/generalservice';

interface OptionType {
  value: any;
  label: string;
}

interface StatusSelectProps {
  value: any;
  onChange: (selected: OptionType | null) => void;
  required?: boolean;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
  start?: string;
  placeholder?: string;
}

const StatusSelect: React.FC<StatusSelectProps> = ({
  value,
  onChange,
//   required = false,
  disabled = false,
  label = 'Status',
  name = 'statusVal',
  className = '',
  start = '0',
  placeholder,
}) => {
  const [statuses, setStatuses] = useState<OptionType[]>([]);
  const [loading, setLoading] = useState(true);

  const user = getUserInfo();

  useEffect(() => {
    const fetchStatuses = async () => {
      setLoading(true);
      try {
        if (user?.id && user?.access_token) {
          const data = await StatusList(user.id, user.access_token, start);
          const formatted = data.map((status: Status) => ({
            value: status.id,
            label: status.display_name,
          }));

          const defaultOption = { value: 0, label: placeholder || `Select ${label}` };
          setStatuses([defaultOption, ...formatted]);
        } else {
          setStatuses([]);
        }
      } catch (error) {
        console.error('Error fetching statuses:', error);
        setStatuses([]);
      } finally {
        setLoading(false);
      }
    };

    fetchStatuses();
  }, [start, user?.id, user?.access_token, placeholder, label]);

  const selectedOption = statuses.find((option) => option.value === value) || null;

  return (
    <div className={className}>
      <Select
        id={name}
        name={name}
        isDisabled={disabled || loading}
        isLoading={loading}
        options={statuses}
        value={selectedOption}
        onChange={onChange}
        isClearable={true} // Always show clear button
        placeholder={placeholder || `Select ${label}`}
      />
    </div>
  );
};

export default StatusSelect;
