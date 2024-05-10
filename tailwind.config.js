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
              mainColor: "#5C5742",
              lightColor: '#87826d',
          },
      },
  },
  plugins: [],
};
