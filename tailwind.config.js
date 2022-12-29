/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
      ],
  theme: {
    container: {
      center: true,
    },
    screens: {
      xxs: '360px',
      xsm: '480px',
      sm: '640px',
      md: '768px',
      lg: '1024px',
      xl: '1280px',
      '2xl': '1440px',
    },
    extend: {
        backgroundImage: {
          'hero': "url('../img/hero.png')",
          'about-hero': "url('../img/about/about-hero.png')",
          'contact-hero': "url('../img/contact-hero.png')",
          'home-slider': "url('../img/bg.png')",
          'services-hero': "url('../img/services/inner_services/1.png')",
          'independent-services-hero': "url('../img/services/inner_services/2.png')",
          'car-finance-hero': "url('../img/services/inner_services/3.png')",
          'transporations-hero': "url('../img/services/inner_services/4.png')",
          'legal-hero': "url('../img/services/inner_services/4.png')",
          'dispute-hero': "url('../img/dispute-hero.png')",
        },
        colors:{
          'primary': '#212935',
          'secondary': '#F0EEE6',
          'secondaryDark': '#D6D3C7',
          'card': '#F4F4F4',
          'orange': '#C65530',
          'blue': '#323647',
          'bgc': '#231F20',
        },
        fontFamily:{
          poppins: ['Poppins', 'sans-serif'],
          roboto: ['Roboto', 'sans-serif'],
          sans: ['Open Sans', 'sans-serif'],
          inter: ['Inter', 'sans-serif'],
        },
        padding:{
          15: '60px',
        },
        // screens: {
        //   'xs': {
        //     'min': '480px',
        //     'max': '639px'
        //   },
        // },
      },
  },
  plugins: [],
}
