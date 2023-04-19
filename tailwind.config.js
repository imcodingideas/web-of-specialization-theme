/** @type {import('tailwindcss').Config} config */
import forms from '@tailwindcss/forms';

const config = {
  content: [
    './index.php',
    './app/**/*.php',
    './resources/**/*.{php,vue,js}',
    './atcf7/**/*.php',
  ],
  safelist: [
    {
      pattern: /mt-.+/,
    },
    {
      pattern: /mb-.+/,
    },
  ],
  theme: {
    extend: {
      colors: {}, // Extend Tailwind's default colors
    },
  },
  plugins: [forms],
};

export default config;
