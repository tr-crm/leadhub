import React, { useState, useEffect } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { getBranchList } from '@/services/generalservice';
import type {Branch } from '@/services/generalservice';

interface OptionType {
  value: any;
  label: string;
}

interface BranchSelectProps {
  value: any;
  onChange: (selected: OptionType | null) => void;
  start?: string;
  required?: boolean;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
}

const BranchSelect: React.FC<BranchSelectProps> = ({
  value,
  onChange,
  start = '0',
  required = false,
  disabled = false,
  label = 'Branch',
  name = 'branchVal',
  className = '',
}) => {
  const [branches, setBranches] = useState<OptionType[]>([]);
  const [loading, setLoading] = useState(true);
  const user = getUserInfo();

  useEffect(() => {
    const fetchBranches = async () => {
      setLoading(true);
      try {
        if (user?.id && user?.access_token) {
          const data = await getBranchList(user.id, user.access_token, start);
          // const options: OptionType[] = data.map((branch: Branch) => ({
          //   value: branch.id,
          //   label: branch.display_name,
          // }));
          //   const defaultOption = { value: 0, label: 'Select Source' };
          // const defaultOption = { value: '', label: `Select ${label}` };
          // setBranches([defaultOption, ...options]);

           const formatted = data.map((branch: Branch) => ({
                        value: branch.id,
            label: branch.display_name,
                    }));
          
                    // Add default option at the top
                    const defaultOption = { value: 0, label: 'Select Branch' };
                    setBranches([defaultOption, ...formatted]);
        } else {
          setBranches([]);
        }
      } catch (error) {
        console.error('Error loading branches:', error);
        setBranches([]);
      } finally {
        setLoading(false);
      }
    };

    fetchBranches();
  }, [start, user?.id, user?.access_token, label]);

  const selectedOption = branches.find((o) => o.value === value) || null;

  return (
    <div className={className}>
      <Select
        id={name}
        name={name}
        isDisabled={disabled || loading}
        isLoading={loading}
        options={branches}
        value={selectedOption}
        onChange={onChange}
        isClearable={!required}
        placeholder={`Select ${label}`}
      />
    </div>
  );
};

export default BranchSelect;
