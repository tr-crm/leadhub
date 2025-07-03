// src/types/lead.types.ts

export interface Lead {
  id: number;
   lead_date: string | null;
  full_name: string | null;
  email?: string;
  source_name: string | null;
   source_id: number;
  phone_number: string | null;
  campaign_name: string;
  created_at: string;
  category_name:string;
  category_id: number;
  sub_category_name:string;
  sub_category_id:number;
  product_name:string;
  product_id:number;
  country_name:string;
  country_id:number;
  branch_id:number;
  lead_status:number;
  lead_status_name:string;
  executive_name:string
  region_name:string
  json_response_data: {
    full_name?: string;
    email?: string;
    phone_number?: string;
    [key: string]: any;
  };
}
