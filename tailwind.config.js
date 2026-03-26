/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,php}", "./includes/**/*.php", "./assets/js/**/*.js"],
  theme: {
    extend: {
      fontFamily: {
          sans: ['Inter', 'sans-serif'],
          heading: ['Outfit', 'sans-serif'],
      },
      colors: {
          brand: {
              50: '#eff6ff',
              100: '#dbeafe',
              500: '#3b82f6',
              600: '#2563eb',
              700: '#1d4ed8',
              900: '#0f172a',
          },
          accent: '#06b6d4',
          spring: '#6db33f',
      },
      boxShadow: {
          'glow': '0 0 20px rgba(37, 99, 235, 0.15)',
          'card': '0 10px 30px -5px rgba(0, 0, 0, 0.05)',
      },
      keyframes: {
          'scroll-mobile': {
              '0%': { transform: 'translateX(0)' },
              '100%': { transform: 'translateX(-50%)' },
          },
          'scroll-tablet': {
              '0%': { transform: 'translateX(0)' },
              '100%': { transform: 'translateX(-50%)' },
          },
          'scroll-desktop': {
              '0%': { transform: 'translateX(0)' },
              '100%': { transform: 'translateX(-50%)' },
          },
          'scroll-large': {
              '0%': { transform: 'translateX(0)' },
              '100%': { transform: 'translateX(-50%)' },
          },
      },
      animation: {
          'scroll-mobile': 'scroll-mobile 15s linear infinite',
          'scroll-tablet': 'scroll-tablet 20s linear infinite',
          'scroll-desktop': 'scroll-desktop 25s linear infinite',
          'scroll-large': 'scroll-large 30s linear infinite',
      }
    }
  },
  plugins: [],
}
