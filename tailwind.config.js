import daisyui from 'daisyui';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {},
    fontFamily: {
      montserrat: ['Montserrat Alternates', 'sans-serif'],
    },
  },
  plugins: [
    daisyui,
    require('tailwind-scrollbar-hide'),
    require('@tailwindcss/typography'),
  ],
  daisyui: {
    themes: [
      {
        light: {
          ...require('daisyui/src/theming/themes')['light'],
          primary: '#005C78',
          neutral: '#005C78',
          'base-100': '#F3F7EC',
          'base-200': '#E7EAE2',
          'base-300': '#DDDDDD',
          error: '#C94234',
          secondary: '#666666',
        },
      },
    ],
  },
};
