/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './**/*.php',
    './src/**/*.css',
  ],
  theme: {
    extend: {
      colors: {
        'nk-dark':   '#272727',
        'nk-accent': '#f1592a',
        'nk-warm':   '#f1e9d2',
        'nk-white':  '#ffffff',
      },
      fontFamily: {
        display: ['"Bebas Neue"', 'sans-serif'],
        body:    ['Inter', 'sans-serif'],
      },
      letterSpacing: {
        widest: '0.2em',
      },
    },
  },
  plugins: [],
}
