import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './node_modules/flowbite/**/*.{vue,js}',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                marquee: 'marquee 25s linear infinite',
                marquee2: 'marquee2 25s linear infinite',
              },
              keyframes: {
                marquee: {
                  '0%': { transform: 'translateX(0%)' },
                  '100%': { transform: 'translateX(-100%)' },
                },
                marquee2: {
                  '0%': { transform: 'translateX(100%)' },
                  '100%': { transform: 'translateX(0%)' },
                },
              },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
    ],
};
