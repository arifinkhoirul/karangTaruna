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
            keyframes: {
                scroll: {
                    '0%': { transform: 'translateX(0)' },
                    '100%': { transform: 'translateX(-50%)' },
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
            },
            animation: {
                scroll: 'scroll 30s linear infinite',
                wiggle : 'wiggle 0.5s ease-in-out infinite',
                bounce : 'bouncex 1s infinite',
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
