

import { LineChart, PieChart, } from 'echarts/charts';
import { TooltipComponent } from 'echarts/components';
import { CanvasRenderer, } from 'echarts/renderers';
import { useIsClient } from "usehooks-ts";

import EChartClient from "@/components/EChartClient.tsx";
import BaseVectorMap from "@/components/maps/BaseVectorMap.tsx";

import { getEchartOptions, getOrdersStatsOptions, getWorldMapOptions } from "./data";

export const DonutChart = () => {
  return (
    <EChartClient
      extensions={[PieChart, TooltipComponent, CanvasRenderer]}
      getOptions={getEchartOptions}
      style={{ height: 60, width: 60 }}
    />
  )
}

export const OrdersChart = () => {
  return (
    <EChartClient
      extensions={[LineChart, TooltipComponent, CanvasRenderer]}
      getOptions={getOrdersStatsOptions}
      style={{ height: 405 }}
    />
  )
}

export const WorldMap = () => {
  const isClient = useIsClient()
  return (
    isClient && <BaseVectorMap type="world" options={getWorldMapOptions()} style={{ height: 297 }} />
  )
}