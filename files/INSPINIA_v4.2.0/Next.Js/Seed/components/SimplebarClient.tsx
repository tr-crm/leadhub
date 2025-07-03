"use client"
import SimpleBar, { Props } from 'simplebar-react'
import type { ChildrenType } from '@/types'

type SimplebarClientProps = ChildrenType & Props

const SimplebarClient = ({ children, ...restProps }: SimplebarClientProps) => {
  return (
    <SimpleBar {...restProps}> {children}</SimpleBar>
  )
}

export default SimplebarClient