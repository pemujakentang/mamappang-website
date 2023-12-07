import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
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
                'move-x-fast': 'moveX 1s ease-in-out infinite',
                'move-y-fast': 'moveY 1s ease-in-out infinite',
                'wiggle': 'wiggle 6s ease-in-out infinite',
                'spin-slow': 'spin 15s linear infinite',
                'bounce-slow': 'bounce 3s infinite',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                averialibrebold: ['Averia Libre Bold'],
                averialibrebolditalic: ['Averia Libre Bold Italic'],
                averialibreitalic: ['Averia Libre Italic'],
                averialibrelight: ['Averia Libre Light'],
                averialibrelightitalic: ['Averia Libre Light Italic'],
                averialibre: ['Averia Libre'],
                lazydog: ['Lazy Dog'],
                blackhansans: ['Black Han Sans']
            },
        },
    },

    plugins: [forms],
};
