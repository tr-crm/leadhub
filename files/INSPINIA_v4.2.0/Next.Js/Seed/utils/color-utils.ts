export function getColor (v: string, a: number = 1): string {
  const val = getComputedStyle(document.documentElement)
    .getPropertyValue(`--ins-${v}`)
    .trim()

  return v.includes('-rgb') ? `rgba(${val}, ${a})` : val
}