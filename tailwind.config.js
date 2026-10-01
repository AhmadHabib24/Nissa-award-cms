/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        nissa: {
          magenta: '#9D2254', // Approximate deep magenta from logo
          pink: '#DE8B9E',    // Approximate soft pink from logo
          sage: '#7C8A71',    // Approximate sage green from logo
          dark: '#1F2937',
          light: '#F9FAFB'
        }
      },
      fontFamily: {
        sans: ['Poppins', 'sans-serif'], // Professional sans-serif
      }
    },
  },
  plugins: [],
}
