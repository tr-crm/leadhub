// src/types/lead.types.ts

export interface Lead {
  id: number;
   lead_date: string | null;
  full_name: string | null;
  first_name:string  | null;
  last_name:string  | null;
  email?: string;
  source_name: string | null;
   source_id: any;
  phone_number: string | null;
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
  transfer_status:number;
  lead_status_name:string;
  executive_name:string
  executive_id:any;
  region_name:string
  year:any;
  month:any;
  dm:any;
  campaign_id:any;
  campaign_name:any;
  comments:any;
  comment:any;
  region:any;
  quality_id:any;
  import_type:any;
  followup_date:any;
  touch_date_time:any;
  touch_status:any;
  time_to_first_response:any;
  time_to_first_response_readable:any;
  json_response_data: {
    full_name?: string;
    email?: string;
    phone_number?: string;
    [key: string]: any;
  };
  partial_walkin_date:string;
  branch_name:string;
  walkin_date:string;
  product: string;
  branchname: string;
  products:any;
}
