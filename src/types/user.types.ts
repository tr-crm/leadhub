export interface User {
  id: number;
  full_name: string;
  email_address: string;
  phone_number?: string;
  role: string;
  // ...other fields
}