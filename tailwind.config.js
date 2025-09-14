import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            animation: {
                'infinite-scroll': 'infinite-scroll 25s linear infinite',
                wiggle : 'wiggle 0.5s ease-in-out infinite',
                bounce : 'bouncex 1s infinite',
                'wiggle-toggle': 'wiggle-pause 7s ease-in-out infinite',
            },
            keyframes: {
                'infinite-scroll': {
                        from: { transform: 'translateX(0)' },
                        to: { transform: 'translateX(-100%)' },
                },
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
                'wiggle-pause': {
                    '0%, 6%': { transform: 'rotate(-3deg)' },
                    '3%': { transform: 'rotate(3deg)' },
                    '9%': { transform: 'rotate(-3deg)' },
                    '12%': { transform: 'rotate(3deg)' },
                    '15%': { transform: 'rotate(-3deg)' },
                    /* setelah 3 detik (sekitar 43% dari total 7s) diam */
                    '43%, 100%': { transform: 'rotate(0deg)' },
                },
            },
            screens: {
                sm: "575px",
                md: "765px",
                lg: "992px",
                xl: "1200px",
                "2xl": "1400px",
                "3xl": "1600px",
            },
            fontFamily: {
                rubik: ['Rubik', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: "#FE0000",
                secondary: "#FEF203",
                bg1: "#FEFEFE",
                bg2: "#F9F9F9",
                textPrimary: "#292D33",
                textSecondary: "#404550",
            },
        },
    },

    plugins: [
        forms,
        require('flowbite/plugin'),
    ],
};
