import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'ken-burns': 'ken-burns 20s ease-in-out infinite',
                'gradient-x': 'gradient-x 3s ease infinite',
                'float-particle': 'float-particle 10s ease-in-out infinite',
                'fade-in-up': 'fade-in-up 0.5s ease-out forwards',
            },
            keyframes: {
                'ken-burns': {
                    '0%': { transform: 'scale(1) translate(0, 0)' },
                    '50%': { transform: 'scale(1.1) translate(-1%, -1%)' },
                    '100%': { transform: 'scale(1) translate(0, 0)' },
                },
                'gradient-x': {
                    '0%, 100%': { backgroundPosition: '0% 50%' },
                    '50%': { backgroundPosition: '100% 50%' },
                },
                'float-particle': {
                    '0%, 100%': { transform: 'translate(0, 0) scale(1)', opacity: '0.2' },
                    '25%': { transform: 'translate(30px, -40px) scale(1.5)', opacity: '0.6' },
                    '50%': { transform: 'translate(-20px, -80px) scale(1)', opacity: '0.4' },
                    '75%': { transform: 'translate(40px, -60px) scale(1.2)', opacity: '0.5' },
                },
                'fade-in-up': {
                    '0%': { opacity: '0', transform: 'translateY(10px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
            },
        },
    },
    plugins: [],
};
