/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.php',
    './page-templates/**/*.php',
    './template-parts/**/*.php',
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
      fontSize: {
        'hero':  ['clamp(3rem, 8vw, 6rem)', { lineHeight: '1.0' }],
        'h1':    ['clamp(2rem, 5vw, 3.5rem)', { lineHeight: '1.1' }],
        'h2':    ['clamp(1.75rem, 4vw, 2.75rem)', { lineHeight: '1.15' }],
      },
      letterSpacing: {
        'widest-plus': '0.25em',
      },
      transitionDuration: {
        '400': '400ms',
      },
    },
  },
  plugins: [],
};
