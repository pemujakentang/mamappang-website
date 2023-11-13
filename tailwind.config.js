/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      
      keyframes: {
        wiggle: {
          '0%, 100%': { transform: 'rotate(-5deg)' },
          '50%': { transform: 'rotate(5deg)' },
        },
        moveY: {
          '0%, 100%': { transform: 'translateY(-25%)' },
          '50%': { transform: 'translateY(0%)' },
        },
        moveX: {
          '0%, 100%': { transform: 'translateX(20%)' },
          '50%': { transform: 'translateX(0%)' },
        }
      },
      animation: {
        'move-x': 'moveX 14s ease-in-out infinite',
        'move-y': 'moveY 10s ease-in-out infinite',
        'wiggle': 'wiggle 6s ease-in-out infinite',
        'spin-slow': 'spin 7s linear infinite',
        'bounce-slow': 'bounce 3s infinite',
      },
      fontFamily: {
        averialibrebold: ['Averia Libre Bold'],
        averialibrebolditalic: ['Averia Libre Bold Italic'],
        averialibreitalic: ['Averia Libre Italic'],
        averialibrelight: ['Averia Libre Light'],
        averialibrelightitalic: ['Averia Libre Light Italic'],
        averialibre: ['Averia Libre'],
        lazydog: ['Lazy Dog']
      },
    },
  },
  plugins: [],
}