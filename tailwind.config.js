const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                black: {
                    default: '#0D0708',
                    dark: '#1C1A18',
                },
                orange: {
                    default: '#FD5F21',
                    light: '#FF8428',
                    dark: '#442616',
                    darker: '#321c10',
                }
            },
        },
        container: {
            center: true,
            padding: {
                default: '2rem',
                sm: '4rem',
                lg: '6rem',
                xl: '8rem',
            },
        },
    },
    variants: {
        opacity: ['responsive', 'hover', 'focus', 'disabled'],
    },

        plugins: [require('@tailwindcss/ui')],
    };
