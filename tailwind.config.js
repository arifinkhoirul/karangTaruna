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
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            keyframes: {
                wiggle : {
                    '0%, 100%': { transform: 'rotate(-0.5deg)' },
                    '50%': { transform: 'rotate(1deg)' },
                    },
                bouncex: {
                    '0%, 100%': {
                        transform: 'translateY(-10%)',
                        animationTimingFunction: 'cubic-bezier(0.8, 0, 1, 1)',
                    },
                    '50%': {
                        transform: 'translateY(0)',
                        animationTimingFunction: 'cubic-bezier(0, 0, 0.2, 1)',
                    },
                },
            },
            animation : {
                wiggle : 'wiggle 0.5s ease-in-out infinite',
                bounce : 'bouncex 1s infinite',
            }
        },
    },

    plugins: [forms],
};
