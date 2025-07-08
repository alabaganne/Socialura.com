/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./src/**/*.{html,js}"], // Dummy content to prevent warnings
  safelist: [
    {pattern: /.*/}  // Include everything - disable purging completely
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