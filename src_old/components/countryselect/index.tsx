// CountrySelect.tsx

import React, { useEffect, useState } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { CountryList } from '@/services/generalservice';
import type { Country } from '@/services/generalservice';

interface OptionType {
  value: number | '';  // allow empty string for default option
  label: string;
}

interface CountrySelectProps {
  value: number | '';
  onChange: (option: OptionType | null) => void;
  required?: boolean;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
}

const CountrySelect: React.FC<CountrySelectProps> = ({
  value,
  onChange,
  required = false,
  disabled = false,
  label = 'Country',
  name = 'countryVal',
  className = '',
}) => {
  const [countries, setCountries] = useState<Country[]>([]);
  const [loading, setLoading] = useState(true);
  const user = getUserInfo();

  useEffect(() => {
    const fetchCountries = async () => {
      setLoading(true);
      try {
        if (user?.id && user?.access_token) {
          const data = await CountryList(user.id, user.access_token);
          setCountries(data || []);
        } else {
          setCountries([]);
        }
      } catch (error) {
        console.error('Error fetching countries:', error);
        setCountries([]);
      }
      setLoading(false);
    };

    fetchCountries();
  }, [user?.id, user?.access_token]);

  // Add default option at the beginning
  const options: OptionType[] = [
    { value: '', label: `Select ${label}` },  // Default option
    ...countries.map((country) => ({
      value: country.id,
      label: country.name,
    })),
  ];

  const selectedOption = options.find((opt) => opt.value === value) || null;

  return (
    <div className={className}>
      <Select
        inputId={name}
        name={name}
        options={options}
        value={selectedOption}
        onChange={onChange}
        isLoading={loading}
        isDisabled={disabled || loading}
        isClearable={!required}
        placeholder={`Select ${label}`}
        classNamePrefix="react-select"
      />
    </div>
  );
};

export default CountrySelect;
