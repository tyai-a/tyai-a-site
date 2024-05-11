/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./**/*.php",
    "./note/**/*.php",
    "./inc/**/*.php",
    "./js/**/*.js",
    './node_modules/preline/dist/*.js',
  ],
  theme: {
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
    require('preline/plugin'),
  ],
}