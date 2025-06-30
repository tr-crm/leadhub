// src/components/SubCategorySelect.tsx
import React, { useEffect, useState, useMemo } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { getSubCategoryList } from '@/services/generalservice';
import type { SubCategory } from '@/services/generalservice';

interface OptionType {
  value: number | '';
  label: string;
}

interface SubCategorySelectProps {
  categoryId: number | '';
  value: number | '';
  onChange: (option: OptionType | null) => void;
  required?: boolean;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
}

const SubCategorySelect: React.FC<SubCategorySelectProps> = ({
  categoryId,
  value,
  onChange,
  required = false,
  disabled = false,
  label = 'SubCategory',
  name = 'subCategoryVal',
  className = '',
}) => {
  const [subCategories, setSubCategories] = useState<SubCategory[]>([]);
  const [loading, setLoading] = useState(false);
  const user = getUserInfo();

  useEffect(() => {
    let isMounted = true;

    const fetchSubCategories = async () => {
      setLoading(true);
      try {
        if (user?.id && user?.access_token && categoryId !== '') {
          const list = await getSubCategoryList(user.id, user.access_token, categoryId);
          if (isMounted) {
            setSubCategories(list || []);
          }
        } else {
          if (isMounted) setSubCategories([]);
        }
      } catch (error) {
        console.error('Failed to fetch subcategories:', error);
        if (isMounted) setSubCategories([]);
      } finally {
        if (isMounted) setLoading(false);
      }
    };

    fetchSubCategories();

    return () => {
      isMounted = false;
    };
  }, [categoryId, user?.id, user?.access_token]);

  const options: OptionType[] = useMemo(() => [
    { value: '', label: `Select ${label}` }, // Dummy "Select SubCategory" option
    ...subCategories.map((sc) => ({
      value: sc.id,
      label: sc.display_name,
    })),
  ], [subCategories, label]);

  const selectedOption =
    value === ''
      ? options[0]
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
        isDisabled={disabled || loading || categoryId === ''}
        isClearable={!required}
        placeholder={`Select ${label}`}
        classNamePrefix="react-select"
        noOptionsMessage={() =>
          categoryId === '' ? 'Select a category first' : 'No subcategories found'
        }
      />
    </div>
  );
};

export default SubCategorySelect;
