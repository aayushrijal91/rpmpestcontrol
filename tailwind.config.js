/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    container: {
      center: true,
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        primary: '#FFE03C',
        secondary: '#FFC736',
        dark: '#0F0D03',
        grey: '#8C8A89',
        light: "#F3F2EB"
      },
      fontFamily: {
        'darker-groteque': ['Darker Grotesque', 'sans-serif'],
      },
      fontSize: {
        '35': "35px",
        '55': "55px",
        '65': "65px",
      }
    },
  },
  plugins: [],
}

