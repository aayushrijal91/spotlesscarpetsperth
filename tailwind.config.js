/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/**/*.{html,js,php}"],
  theme: {
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1442px',
      '2xl': '1600px',
    },
    container: {
      center: true,
      padding: '12px',
    },
    extend: {
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'primary': '#ED3D3D',
        'secondary': '#acce31',
        'light': '#f0f0f0',
        'dark': '#1a1a1a'
      },
      fontFamily: {
        'proxima-nova': ['Proxima Nova', 'sans-serif'],
        'grandmas-television': ['Grandmas Television', 'sans-serif'],
        'vampiro-one': ['Vampiro One', 'sans-serif'],
        'agressive': ['Agressive', 'sans-serif']
      }
    },
  },
  plugins: [],
}

