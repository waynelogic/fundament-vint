/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            fontFamily: {
                'sans': ['Nunito', 'serif'],
                'serif': ['Unbounded', 'system-ui'],
            },
            cursor: {
                'fancy': 'url(cursor/pointer.cur), pointer',
            }
        },
        screens: {
            'sm': '576px',
            'md': '768px',
            'lg': '992px',
            'xl': '1280px',
            '2xl': '1400px',
        },
        container: {
            center: true,
            padding: {
                DEFAULT: '1rem',
                sm: '2rem',
                lg: '4rem',
                xl: '5rem',
                '2xl': '6rem',
            },
        },
    },
    plugins: [
        require("@tailwindcss/forms")({
            strategy: 'base', // only generate global styles
        }),
    ],
}
