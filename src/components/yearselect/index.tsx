import React from 'react';
import { Form } from 'react-bootstrap';

interface YearSelectProps {
  value: string | '';
  onChange: (e: React.ChangeEvent<HTMLSelectElement>) => void;
  required?: boolean;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
}

const YearSelect: React.FC<YearSelectProps> = ({
  value,
  onChange,
  required = false,
  disabled = false,
  label = 'Year',
  name = 'yearVal',
  className = '',
}) => {
  const years = [2024, 2025, 2026];

  return (
    <Form.Group className={className}>
      {/* <Form.Label htmlFor={name}>{label}</Form.Label> */}
      <Form.Select
        id={name}
        name={name}
        value={value === '' ? '' : String(value)}
        onChange={onChange}
        required={required}
        disabled={disabled}
      >
        <option value="">Select {label}</option>
        {years.map((year) => (
          <option key={year} value={String(year)}>
            {year}
          </option>
        ))}
      </Form.Select>
    </Form.Group>
  );
};

export default YearSelect;
