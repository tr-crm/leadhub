// src/components/CategorySelect.tsx
import React, { useEffect, useState, useMemo } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { getCategoryList } from '@/services/generalservice';
import type { Category } from '@/services/generalservice';

interface OptionType {
  value: number | '';
  label: string;
}

interface CategorySelectProps {
  value: number | '';
  onChange: (option: OptionType | null) => void;
  required?: boolean;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
}

const CategorySelect: React.FC<CategorySelectProps> = ({
  value,
  onChange,
  required = false,
  disabled = false,
  label = 'Category',
  name = 'categoryVal',
  className = '',
}) => {
  const [categories, setCategories] = useState<Category[]>([]);
  const [loading, setLoading] = useState(true);
  const user = getUserInfo();

  useEffect(() => {
    const fetchCategories = async () => {
      setLoading(true);
      try {
        if (user?.id && user?.access_token) {
          const list = await getCategoryList(user.id, user.access_token);
          setCategories(list || []);
        } else {
          setCategories([]);
        }
      } catch (error) {
        console.error('Error fetching categories:', error);
        setCategories([]);
      }
      setLoading(false);
    };

    fetchCategories();
  }, [user?.id, user?.access_token]);

  const options: OptionType[] = useMemo(() => [
    { value: '', label: `Select ${label}` }, // Dummy "Select Category" option
    ...categories.map((category) => ({
      value: category.id,
      label: category.display_name,
    })),
  ], [categories, label]);

  const selectedOption =
    value === ''
      ? options[0] // show dummy option as selected if value is empty string
      : options.find((opt) => opt.value === value) || null;

  return (
    <div className={className}>
      {/* {label && <label htmlFor={name}>{label}</label>} */}
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

export default CategorySelect;
