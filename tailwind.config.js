/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
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