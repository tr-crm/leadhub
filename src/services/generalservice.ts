// src/services/generalservice.ts

import axios from '@/api/axiosInstance';

export interface Source {
  id: any;
  name: string;
  display_name: string;
}

export const SourceList = async (
  userId: number,
  token: string,
  start: string = '0'
): Promise<Source[]> => {
  try {
    const response = await axios.post('/api/Masters/getSourceList', {
      userIdVal: userId,
      tokenVal: token,
      start,
    });

    const data = response.data;

    if (Array.isArray(data?.data)) {
      return data.data.map((src: any) => ({
        id: Number(src.id),
        name: src.name,
        display_name: src.display_name,
      }));
    } else {
      console.warn('Unexpected source list format:', data);
      return [];
    }
  } catch (error) {
    console.error('Error fetching source list:', error);
    return [];
  }
};

// Category List


export interface Category {
  id: number;
  name: string;
  display_name: string;
}

export const getCategoryList = async (
  userId: number,
  token: string
): Promise<Category[]> => {
  try {
    const response = await axios.post('/api/Masters/getCategoryList', {
      userIdVal: userId,
      tokenVal: token,
    });

    const payload = response.data;

    if (Array.isArray(payload?.data)) {
      return payload.data.map((cat: any) => ({
        id: Number(cat.id),
        name: cat.name,
        display_name: cat.display_name,
      }));
    } else {
      console.warn('Unexpected category list format', payload);
      return [];
    }
  } catch (err) {
    console.error('Error fetching category list:', err);
    return [];
  }
};

// SubCategory lIST

export interface SubCategory {
  id: number;
  name: string;
  display_name: string;
  category_id: number; // if relevant
}

export const getSubCategoryList = async (
  userId: number,
  token: string,
  categoryId: number
): Promise<SubCategory[]> => {
  try {
    const response = await axios.post('/api/Masters//getSubCategoryList', {
      userIdVal: userId,
      tokenVal: token,
      categoryIdVal: categoryId,
    });

    const payload = response.data;

    if (Array.isArray(payload?.data)) {
      return payload.data.map((subCat: any) => ({
        id: Number(subCat.id),
        name: subCat.name,
        display_name: subCat.display_name,
        category_id: Number(subCat.category_id),
      }));
    } else {
      console.warn('Unexpected subcategory list format', payload);
      return [];
    }
  } catch (err) {
    console.error('Error fetching subcategory list:', err);
    return [];
  }
};



export interface Product {
  id: string;
  name: string;
  display_name: string;
  category_id:any
}

export const ProductList = async (
  userId: number,
  token: string,
  start: string = '0',
  categoryId: number

): Promise<Product[]> => {
  try {
    const response = await axios.post('/api/Masters/getProductListByCategoryId', {
      userIdVal: userId,
      tokenVal: token,
      start,
      categoryIdVal: categoryId,
    });

    const data = response.data;

    if (Array.isArray(data?.data)) {
      return data.data.map((prod: any) => ({
        id: Number(prod.id),
        name: prod.name,
        display_name: prod.display_name,
      }));
    } else {
      console.warn('Unexpected product list format:', data);
      return [];
    }
  } catch (error) {
    console.error('Error fetching product list:', error);
    return [];
  }
};





export interface Country {
  id: any;
  name: string;
  display_name: string;
}



export const CountryList = async (
  userId: number,
  token: string,
  start: string = '0'
): Promise<Country[]> => {
  try {
    const response = await axios.post(
      '/api/Masters/getCountryList',
      {
        userIdVal: userId,
        tokenVal: token,
        start,
      }
    );

    const data = response.data;

    if (Array.isArray(data?.data)) {
      return data.data.map((country: any) => ({
        id: Number(country.id),
        name: country.name,
        display_name: country.display_name,
      }));
    } else {
      console.warn('Unexpected country list format:', data);
      return [];
    }
  } catch (error) {
    console.error('Error fetching country list:', error);
    return [];
  }
};



export interface Branch {
  id: string;
  display_name: string;
  State:string;
  data: Branch[];
  // Add other fields if needed
}

export const getBranchList = async (
  userId: string,
  token: string,
  start: string = '0',
  region:string,
  type:string
): Promise<Branch[]> => {
  try {
    // const response = await axios.post('/api/Masters/getBranchList', {
        const response = await axios.post('/api/Masters/getBranchesListByRegion', {
      userIdVal: userId,
      tokenVal: token,
      start,
      regionVal:region,
      typeVal:type
    });

    const json = response.data;

    if (json.response === 'success' && Array.isArray(json.data)) {
      return json.data as Branch[];
    } else {
      console.error('getBranchList failed:', json.message);
      return [];
    }
  } catch (error) {
    console.error('API error in getBranchList:', error);
    return [];
  }
};


export interface Status {
  id: number;
  name: string;
  display_name: string;
}

export const StatusList = async (
  userId: number,
  token: string,
  start: string = '0'
): Promise<Status[]> => {
  try {
    const response = await axios.post('/api/Masters/getLeadStatusList', {
      userIdVal: userId,
      tokenVal: token,
      start,
    });

    const data = response.data;

    if (Array.isArray(data?.data)) {
      return data.data.map((status: any) => ({
        id: Number(status.id),
        name: status.name,
        display_name: status.display_name,
      }));
    } else {
      console.warn('Unexpected status list format:', data);
      return [];
    }
  } catch (error) {
    console.error('Error fetching status list:', error);
    return [];
  }
};
export interface Executive{
  id: number;
  name: string;
  display_name: string;
}

export const ExecutiveList = async (
  userId: number,
  token: string,
  region: string = '', // Default to 0 if not provided
  type: string = ''    // Type 1 typically means "Executive"
): Promise<Executive[]> => {
  try {
    const response = await axios.post('/api/User/getUserByRole', {
      userIdVal: userId,
      tokenVal: token,
      typeVal: type,
      regionVal: region,
    });

    const data = response.data;

    if (Array.isArray(data?.data)) {
      return data.data.map((exec: any) => ({
        id: Number(exec.id),
        name: exec.name,
        display_name: exec.display_name || exec.name,
      }));
    } else {
      console.warn('Unexpected executive list format:', data);
      return [];
    }
  } catch (error) {
    console.error('Error fetching executive list:', error);
    return [];
  }
};
export interface Region{
  id: number;
  name: string;
  display_name: string;
}

export const RegionList = async (
  userId: number,
  token: string,
  region: number, // Default to 0 if not provided
  type: number  // Type 1 typically means "Executive"
): Promise<Region[]> => {
  try {
    const response = await axios.post('/api/Masters/getRegionList', {
      userIdVal: userId,
      tokenVal: token,
      typeVal: type,
      regionVal: region,
    });

    const data = response.data;

    if (Array.isArray(data?.data)) {
      return data.data.map((reg: any) => ({
        id: Number(reg.id),
        name: reg.name,
        display_name: reg.display_name || reg.name,
      }));
    } else {
      console.warn('Unexpected region list format:', data);
      return [];
    }
  } catch (error) {
    console.error('Error fetching region list:', error);
    return [];
  }
};



export interface QualityScore {
  id: number;
  name: string;
}


export const getQualityList = async (
    userId: string,
  accessToken: string
): Promise<Region[]> => {
  try {
    const response = await axios.post('/api/Masters/getQualityList', {
      userIdVal: userId,
      tokenVal: accessToken,
      
    });

    const data = response.data;

    if (Array.isArray(data?.data)) {
      return data.data.map((reg: any) => ({
        id: Number(reg.id),
        name: reg.name,
        display_name: reg.display_name || reg.name,
      }));
    } else {
      console.warn('Unexpected qualityscore list format:', data);
      return [];
    }
  } catch (error) {
    console.error('Error fetching qualityscore list:', error);
    return [];
  }
};

// getUserListByRegion


export const getUserListByRegion = async (
  userId: number,
  token: string,
  region: string = '', // Default to 0 if not provided
  type: string = ''    // Type 1 typically means "Executive"
): Promise<Executive[]> => {
  try {
    const response = await axios.post('/api/Masters/getUserListByRegion', {
      userIdVal: userId,
      tokenVal: token,
      typeVal: type,
      regionVal: region,
    });

    const data = response.data;

    if (Array.isArray(data?.data)) {
      return data.data.map((exec: any) => ({
        id: Number(exec.id),
        name: exec.full_name,
        type: exec.type,
        display_name: exec.full_name || exec.first_name,
      }));
    } else {
      console.warn('Unexpected executive list format:', data);
      return [];
    }
  } catch (error) {
    console.error('Error fetching executive list:', error);
    return [];
  }
};




export interface Branch {
  id: string;
  display_name: string;
  State:string;
  data: Branch[];
  // Add other fields if needed
}

export const getRegionBasedBranchList = async (
  userId: string,
  token: string,
  start: string = '0',
  region:string,
  type:string
): Promise<Branch[]> => {
  try {
    // const response = await axios.post('/api/Masters/getBranchList', {
        const response = await axios.post('/api/Masters/getBranchesListByRegionDup', {
      userIdVal: userId,
      tokenVal: token,
      start,
      regionVal:region,
      typeVal:type
    });

    const json = response.data;

    if (json.response === 'success' && Array.isArray(json.data)) {
      return json.data as Branch[];
    } else {
      console.error('getBranchList failed:', json.message);
      return [];
    }
  } catch (error) {
    console.error('API error in getBranchList:', error);
    return [];
  }
};

