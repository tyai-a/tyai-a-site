/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./*.php",
    "./note/**/*.php",
    "./inc/**/*.php",
    './node_modules/preline/dist/*.js',
  ],
  theme: {
  },
  plugins: [
    require('preline/plugin'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
}