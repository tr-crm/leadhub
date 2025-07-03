"use client"
import 'jsvectormap'
import 'jsvectormap/dist/maps/world.js'
import { HTMLAttributes, useEffect, useState } from "react";

type BaseVectorMapProps = {
  options?: any;
  type: string;
} & HTMLAttributes<HTMLDivElement>

const BaseVectorMap = ({ options, type, ...props }: BaseVectorMapProps) => {

  const selectorId = type + new Date().getTime();
  const [map, setMap] = useState<any>();

  useEffect(() => {
    if (!map) {
      // create jsvectormap
      const map = new (window as any)['jsVectorMap']({
        selector: '#' + selectorId,
        map: type,
        ...options,
      })

      setMap(map);
    }
  }, [selectorId, map, options, type]);

  return (
    <div id={selectorId} {...props} />
  )
}

export default BaseVectorMap
