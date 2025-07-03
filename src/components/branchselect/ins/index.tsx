// components/InlineField.tsx
import React from 'react';
import { Form } from 'react-bootstrap';

interface Props {
  label: string;
  name: string;
  value: any;
  onChange: (name: string, value: any) => void;
  type?: string;
  required?: boolean;
  children?: React.ReactNode;
}

const InlineField: React.FC<Props> = ({
  label,
  name,
  value,
  onChange,
  type = 'text',
  required = false,
  children,
}) => {
  if (children) return (
    <Form.Group className="mb-3" controlId={name}>
      <Form.Label>{label}</Form.Label>
      {children}
    </Form.Group>
  );

  return (
    <Form.Group className="mb-3" controlId={name}>
      <Form.Label>{label}</Form.Label>
      <Form.Control
        type={type}
        value={value}
        onChange={(e) => onChange(name, e.target.value)}
        required={required}
      />
    </Form.Group>
  );
};

export default InlineField;
