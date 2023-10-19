const defaultTheme = require('tailwindcss/defaultTheme')

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php"
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['"IBM Plex Sans"', ...defaultTheme.fontFamily.sans],
                'heading': ['"Inter"', ...defaultTheme.fontFamily.sans]
            }
        },
    },
    plugins: [],
}
