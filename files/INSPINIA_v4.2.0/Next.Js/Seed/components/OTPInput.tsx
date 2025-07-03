"use client"
import { useRef } from "react";
import { FormControl, FormLabel } from "react-bootstrap";

type OTPInputProps = {
    code: string[];
    setCode: (value: string[]) => void;
    label?: string;
    labelClassName?: string;
    inputClassName?: string;
}

const OTPInput = ({ code, setCode, inputClassName, label, labelClassName }: OTPInputProps) => {
    const inputsRef = useRef<Array<HTMLInputElement | null>>([]);

    const handleChange = (e: React.ChangeEvent<HTMLInputElement>, idx: number) => {
        const value = e.target.value;
        if (!/^\d?$/.test(value)) return;

        const newCode = [...code];
        newCode[idx] = value;
        setCode(newCode);

        if (value && idx < inputsRef.current.length - 1) {
            inputsRef.current[idx + 1]?.focus();
        }
    };
    const handleKeyDown = (e: React.KeyboardEvent<HTMLInputElement>, idx: number) => {
        if (e.key === 'Backspace' && !code[idx] && idx > 0) {
            inputsRef.current[idx - 1]?.focus();
        }
    };
    return (
        <>
            <FormLabel className={labelClassName}>
                {label} <span className="text-danger">*</span>
            </FormLabel>
            <div className="d-flex gap-2 two-factor">
                {code.map((number, idx) => (
                    <FormControl
                        key={idx}
                        type="text"
                        inputMode="numeric"
                        pattern="[0-9]*"
                        maxLength={1}
                        className={`text-center ${inputClassName}`}
                        value={number}
                        onChange={(e) => handleChange(e as React.ChangeEvent<HTMLInputElement>, idx)}
                        onKeyDown={(e) => handleKeyDown(e as React.KeyboardEvent<HTMLInputElement>, idx)}
                        ref={(el) => { inputsRef.current[idx] = el }}
                        autoComplete="one-time-code"
                    />
                ))}
            </div>
        </>
    )
}

export default OTPInput