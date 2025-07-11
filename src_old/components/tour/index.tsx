// tourSteps.ts
import type { StepType } from '@reactour/tour';

export const tourSteps: StepType[] = [
  {
    selector: '[data-tour="step-1"]',
    content: 'Welcome to the dashboard!',
  },
  {
    selector: '[data-tour="step-2"]',
    content: 'Here you can manage your profile.',
  },
];
