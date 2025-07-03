"use client"

import CountUp, { CountUpProps } from 'react-countup'

const CountUpClient = ({ ...restProps }: CountUpProps) => {
  return <CountUp {...restProps} />
}

export default CountUpClient
