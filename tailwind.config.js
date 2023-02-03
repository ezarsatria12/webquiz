/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./resources/**/*.css",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php"
  ],
  // tailwind.config.js
  theme: {
    extend: {
      zIndex: {
        '1': '1',
      },
      spacing: {
        '1440': '90rem',
        '199': '12.4375rem',
        '1849': '115.5625rem',
        '128': '90rem',
        '676px' : '123',
        '920px' : '',
        '460px' : '460px'
      },
      boxShadow: {
        'boxjawaban': '8px 11px 4px rgba(0, 0, 0, 0.25);',
        'card': ' 5px 6px 11px 3px rgba(0,0,0,0.25);',
      },
      fontSize: {
      sm: ['14px', '20px'],
      hero: ['40px','40'],
    },
      colors: {
        green: {
            111: 'rgb(127, 183, 126)',
          },
        grey: {
          fade: 'rgb(153, 153, 153)',
        },
        red: {
          redFF6767 : 'rgb(255, 103, 103)'
        },
    },
    fontFamily:{
      poppins:['poppins', 'sans-serif'],
      inter:['inter', 'sans-serif'],
    },
  },
  plugins: [],
}}
