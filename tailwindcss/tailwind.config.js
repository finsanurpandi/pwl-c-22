/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'selector',
  // darkMode: ['selector', '[data-mode="light"]'],
  content: [
    "./src/**/*.{html,js}",
    "./pages/**/*.{html,js}",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

