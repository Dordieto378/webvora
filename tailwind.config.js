/** @type {import('tailwindcss').Config} */
export default {
  content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  theme: {
    extend: {
      colors: {
        surface: '#111111',
        panel: '#1a1a1a',
        muted: '#a3a3a3',
        accent: '#d4af37',
      },
      boxShadow: {
        soft: '0 20px 60px rgba(0, 0, 0, 0.35)',
      },
      maxWidth: {
        content: '1200px',
      },
      backgroundImage: {
        grid: 'linear-gradient(rgba(255,255,255,0.06) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.06) 1px, transparent 1px)',
      },
    },
  },
  plugins: [],
}
