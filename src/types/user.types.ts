export interface User {
  id: number;
  full_name: string;
  first_name: string;
  last_name: string;
  email_address: string;
  phone_number?: string;
  role: string;
  region_name:string;
  leave_status?: number;
  type: number;
  region: number;
  is_available_for_assignment: string | number;
  job_plan: string;
  job_date: string;
  job_execution?: string;
  job_score?: number;
  job_status?: string;
  // ...other fields
}
