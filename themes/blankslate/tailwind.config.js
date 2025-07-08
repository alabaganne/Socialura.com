/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './**/*.php',
    './src/**/*.js',
    './src/**/*.jsx',
  ],
  theme: {
    extend: {
      fontFamily: {
        'sour-gummy': ['Sour Gummy', 'sans-serif'],
      },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
  ],
}