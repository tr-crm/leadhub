import React, { useState, useEffect } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { getBranchList } from '@/services/generalservice';
import type { Branch } from '@/services/generalservice';

interface OptionType {
  value: any;
  label: string;
}

interface GroupedOption {
  label: string;
  options: OptionType[];
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
  const [branches, setBranches] = useState<GroupedOption[]>([]);
  const [loading, setLoading] = useState<boolean>(true);
  const user = getUserInfo();

  // Group flat branches by state
  const groupBranchesByState = (branchList: Branch[]): GroupedOption[] => {
    const stateMap: Record<string, OptionType[]> = {};

    branchList.forEach((branch) => {
      const option: OptionType = {
        value: branch.id,
        label: branch.display_name,
      };

      const stateName = branch.State?.trim() || 'Unknown State';

      if (!stateMap[stateName]) {
        stateMap[stateName] = [];
      }

      stateMap[stateName].push(option);
    });

    return Object.entries(stateMap).map(([state, options]) => ({
      label: state,
      options,
    }));
  };
useEffect(() => {
  const fetchBranches = async () => {
    setLoading(true);
    try {
      if (user?.id && user?.access_token) {
        const result = await getBranchList(user.id, user.access_token, start,user.region,user.type);
        // console.log(result);
        const rawBranches: Branch[] = result ? result : [];
        const grouped = groupBranchesByState(rawBranches);
        setBranches(grouped);
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
}, [start, user?.id, user?.access_token]);


  // Flatten grouped options to find selected value
  const selectedOption =
    branches.flatMap((group) => group.options).find((o) => o.value === value) || null;

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
