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
