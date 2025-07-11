import React, { useState, useEffect, useMemo } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { getQualityList } from '@/services/generalservice';
import type {QualityScore } from '@/services/generalservice';

interface OptionType {
  value: any;
  label: string;
}

interface QualityScoreSelectProps {
  value: any;
  onChange: (selected: OptionType | null) => void;
  required?: boolean;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
  placeholder?: string;
  showDefaultOption?: boolean;
}

const QualityScoreSelect: React.FC<QualityScoreSelectProps> = ({
  value,
  onChange,
  disabled = false,
  label = 'Quality Score',
  name = 'qualityScore',
  className = '',
  placeholder,
  showDefaultOption = true,
}) => {
  const [qualityScores, setQualityScores] = useState<OptionType[]>([]);
  const [loading, setLoading] = useState<boolean>(true);

  const computedPlaceholder = useMemo(() => {
    return placeholder || `Select ${label}`;
  }, [placeholder, label]);

  useEffect(() => {
    let isMounted = true;
    const user = getUserInfo();

    const fetchQualityScores = async () => {
      setLoading(true);
      try {
        if (user?.id && user?.access_token) {
          const data = await getQualityList(user.id, user.access_token);

          const formatted = data.map((qs: QualityScore) => ({
            value: qs.id,
            label: qs.name,
          }));

          const defaultOption = { value: 0, label: computedPlaceholder };

          if (isMounted) {
            setQualityScores(showDefaultOption ? [defaultOption, ...formatted] : formatted);
          }
        } else {
          if (isMounted) setQualityScores([]);
        }
      } catch (error) {
        console.error('Error fetching quality scores:', error);
        if (isMounted) setQualityScores([]);
      } finally {
        if (isMounted) setLoading(false);
      }
    };

    fetchQualityScores();

    return () => {
      isMounted = false;
    };
  }, [computedPlaceholder, showDefaultOption]);

  const selectedOption = qualityScores.find((option) => option.value === value) || null;

  return (
    <div className={className}>
      <Select
        id={name}
        name={name}
        isDisabled={disabled || loading}
        isLoading={loading}
        options={qualityScores}
        value={selectedOption}
        onChange={onChange}
        isClearable={true}
        placeholder={computedPlaceholder}
        noOptionsMessage={() => (loading ? 'Loading...' : 'No quality scores found')}
      />
    </div>
  );
};

export default QualityScoreSelect;
