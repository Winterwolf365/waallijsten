/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'gray': '#666666',
        'dark-red': '#a41c10',
        'red': '#e62413',
      },
      fontSize: {
        "2.5xl": ['1.6875rem', '2.125rem'],
      },
      screens: {
        '3xl': '1840px',
      },
    },
  },
  plugins: [],
}

