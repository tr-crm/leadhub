import React from "react";
import { Form } from "react-bootstrap";

interface Props {
  value: string;
  onChange: (event: React.ChangeEvent<HTMLSelectElement>) => void;
  required?: boolean;
}

const MonthSelect: React.FC<Props> = ({ value, onChange, required }) => {
  const months = [
    { value: "01", name: "January" },
    { value: "02", name: "February" },
    { value: "03", name: "March" },
    { value: "04", name: "April" },
    { value: "05", name: "May" },
    { value: "06", name: "June" },
    { value: "07", name: "July" },
    { value: "08", name: "August" },
    { value: "09", name: "September" },
    { value: "10", name: "October" },
    { value: "11", name: "November" },
    { value: "12", name: "December" },
  ];

  return (
    <Form.Group controlId="monthSelect">
      {/* <Form.Label>Month</Form.Label> */}
      <Form.Select value={value} onChange={onChange} required={required}>
        <option value="">-- Select Month --</option>
        {months.map((m) => (
          <option key={m.value} value={m.value}>
            {m.name}
          </option>
        ))}
      </Form.Select>
    </Form.Group>
  );
};

export default MonthSelect;
