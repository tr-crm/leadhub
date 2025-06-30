import { useState, useMemo } from "react";

export type SortDirection = "asc" | "desc";

export interface SortConfig<T> {
  key: keyof T | string;
  direction: SortDirection;
}

export function useSortableData<
  T extends { statuses?: { name: string; count: number }[] }
>(items: T[], initialConfig?: SortConfig<T>) {
  const [sortConfig, setSortConfig] = useState<SortConfig<T>>(
    initialConfig || { key: "date", direction: "asc" }
  );

  const sortedItems = useMemo(() => {
    const sortableItems = [...items];
    const { key, direction } = sortConfig;

    sortableItems.sort((a, b) => {
      let aVal: any;
      let bVal: any;

      if (key in a) {
        aVal = a[key as keyof T];
        bVal = b[key as keyof T];
      } else {
        const aStatus = a.statuses?.find((s) => s.name === key);
        const bStatus = b.statuses?.find((s) => s.name === key);
        aVal = aStatus?.count ?? 0;
        bVal = bStatus?.count ?? 0;
      }

      if (typeof aVal === "number" && typeof bVal === "number") {
        return direction === "asc" ? aVal - bVal : bVal - aVal;
      }

      if (typeof aVal === "string" && typeof bVal === "string") {
        return direction === "asc"
          ? aVal.localeCompare(bVal)
          : bVal.localeCompare(aVal);
      }

      return 0;
    });

    return sortableItems;
  }, [items, sortConfig]);

  const requestSort = (key: string) => {
    setSortConfig((prev) => ({
      key,
      direction: prev.key === key && prev.direction === "asc" ? "desc" : "asc",
    }));
  };

  return { sortedItems, requestSort, sortConfig };
}
