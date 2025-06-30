import { EChartsOption } from 'echarts'

export type StatisticsWidgetType = {
  title: string
  badge?: {
    text: string
    variant: 'success' | 'primary' | 'info' | 'warning'
  }
  value: number
  prefix?: string
  suffix?: string
  description: string
  chartOptions?: () => EChartsOption
}

export type OrderStatisticsWidgetType = {
  title: string
  value: string | number
  prefix?: string
  suffix?: string
  growth: number
  variant: 'success' | 'danger' | 'primary'
  icon: string
  description: string
}
