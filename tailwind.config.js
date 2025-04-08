import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

import tailwind_scrollbar_hide from "tailwind-scrollbar-hide";

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
            scrollbar: ['hidden'],
        },
    },

    variants: {
        extend: {
            scrollbar: ['hidden'], // Enable the hidden variant
        },
    },

    plugins: [forms, tailwind_scrollbar_hide],
};
