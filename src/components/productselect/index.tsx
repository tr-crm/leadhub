import React, { useState, useEffect } from 'react';
import Select from 'react-select';
import { getUserInfo } from '@/utils/auth';
import { ProductList } from '@/services/generalservice';
import type { Product } from '@/services/generalservice';
interface OptionType {
  value: any;  // Using string to support '' for default option
  label: string;
}

interface ProductSelectProps {
  value: any | '';  // also string here
  onChange: (value: OptionType | null) => void;
  required?: boolean;
  disabled?: boolean;
  label?: string;
  name?: string;
  className?: string;
  start?: string;
}

const ProductSelect: React.FC<ProductSelectProps> = ({
  value,
  onChange,
  required = false,
  disabled = false,
  label = 'Product',
  name = 'productVal',
  className = '',
  start = '0',
}) => {
  const [products, setProducts] = useState<Product[]>([]);
  const [loading, setLoading] = useState(true);

  const user = getUserInfo();

  useEffect(() => {
    const fetchProducts = async () => {
      setLoading(true);
      try {
        if (user?.id && user?.access_token) {
          const data = await ProductList(user.id, user.access_token, start);
          setProducts(data);
        } else {
          setProducts([]);
        }
      } catch (error) {
        console.error('Error fetching products:', error);
        setProducts([]);
      }
      setLoading(false);
    };

    fetchProducts();
  }, [start, user?.id, user?.access_token]);

  // Map products to options and prepend default option
  const options: OptionType[] = [
    { value: '', label: `Select ${label}` },   // Default option
    ...products.map(product => ({
      value: product.id,  // Assuming product.id is string
      label: product.display_name,
    })),
  ];

  // Find selected option or null
  const selectedOption = options.find(opt => opt.value === value) || null;

  return (
    <div className={className}>
      <Select
        inputId={name}
        name={name}
        options={options}
        value={selectedOption}
        onChange={onChange}
        isLoading={loading}
        isDisabled={disabled || loading}
        isClearable={!required}
        placeholder={`Select ${label}`}
        classNamePrefix="react-select"
      />
    </div>
  );
};

export default ProductSelect;
