// const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        /* './storage/framework/views/*.php', */
        './resources/**/*.blade.php',
        './pages/**/*.{html,js}',
        './components/**/*.{html,js}'
    ],
};
