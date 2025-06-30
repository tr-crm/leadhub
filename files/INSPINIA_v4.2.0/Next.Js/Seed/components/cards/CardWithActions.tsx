"use client"
import { useState } from 'react'
import { TbChevronDown, TbRefresh, TbX } from 'react-icons/tb'
import { Card, CardHeader, CardBody, CardTitle } from 'react-bootstrap'

import type { ChildrenType } from '@/types'

type CardWithActionsProps = {
  title: string
  isCollapsible?: boolean
  isRefreshable?: boolean
  isCloseable?: boolean
} & ChildrenType

const CardWithActions = ({ title, isCloseable, isCollapsible, isRefreshable, children }: CardWithActionsProps) => {
  const [isVisible, setIsVisible] = useState(true)
  const [isCollapsed, setIsCollapsed] = useState(false)
  const [isRefreshing, setIsRefreshing] = useState(false)

  const handleClose = () => {
    setIsVisible(false)
  }

  const handleToggle = () => {
    setIsCollapsed(!isCollapsed)
  }

  // Simulate a refresh action
  // In a real-world scenario, you would fetch new data here
  const handleRefresh = () => {
    setIsRefreshing(true)
    setTimeout(() => {
      setIsRefreshing(false)
    }, 1500)
  }

  if (!isVisible) return null

  return (
    <Card className='position-relative'>
      {isRefreshing && (
        <div className="card-overlay">
          <div className="spinner-border text-primary" />
        </div>
      )}

      <CardHeader className="justify-content-between align-items-center">
        <CardTitle>{title}</CardTitle>
        <div className="card-action">
          {isCollapsible && (
            <span
              className="card-action-item"
              onClick={handleToggle}
            >
              <TbChevronDown style={{ rotate: isCollapsed ? '0deg' : '180deg' }} />
            </span>
          )}
          {isRefreshable && (
            <span
              className="card-action-item"
              onClick={handleRefresh}
            >
              <TbRefresh />
            </span>
          )}
          {isCloseable && (
            <span
              className="card-action-item"
              onClick={handleClose}
            >
              <TbX />
            </span>
          )}
        </div>
      </CardHeader>
      <CardBody className="pt-2" style={{
        display: isCollapsed ? 'none' : 'block',
        transition: 'all 0.3s ease'
      }}>
        {children}
      </CardBody>
    </Card>
  )
}

export default CardWithActions