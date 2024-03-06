const plugin = require('tailwindcss/plugin');

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'), // Adds form styles
    require('@tailwindcss/typography'), // Adds typography styles
    require('@tailwindcss/aspect-ratio'), // Adds aspect ratio utilities
    require('@tailwindcss/line-clamp'), // Adds line clamp utilities
    // Add more plugins here as needed
  ],
};
