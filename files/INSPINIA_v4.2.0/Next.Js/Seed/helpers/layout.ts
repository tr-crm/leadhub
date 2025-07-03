'use client'
import {type ElementType} from 'react'

type ToggleDocumentAttributeType = (attribute: string, value: string, remove?: boolean, tag?: ElementType) => void

export const toggleAttribute: ToggleDocumentAttributeType = (attribute, value, remove, tag = 'html'): void => {
    if (document.body) {
        const element = document.getElementsByTagName(tag.toString())[0]
        const hasAttribute = element.getAttribute(attribute)
        if (remove && hasAttribute) element.removeAttribute(attribute)
        else element.setAttribute(attribute, value)
    }
}

export const easeInOutQuad = (t: number, b: number, c: number, d: number) => {
    t /= d / 2;
    if (t < 1) return (c / 2) * t * t + b;
    t--;
    return (-c / 2) * (t * (t - 2) - 1) + b;
};

export const scrollToElement = (element: Element, to: number, duration: number) => {
    const start = element.scrollTop,
        change = to - start,
        increment = 20;
    let currentTime = 0;
    const animateScroll = function () {
        currentTime += increment;
        element.scrollTop = easeInOutQuad(currentTime, start, change, duration);
        if (currentTime < duration) {
            setTimeout(animateScroll, increment);
        }
    };

    animateScroll();
};