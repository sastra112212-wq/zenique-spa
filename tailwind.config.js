/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Plus Jakarta Sans', 'sans-serif'],
                serif: ['Playfair Display', 'serif'],
            },
            colors: {
                'cream': '#F8F4F0',
                'dark': '#3D3D3D',
                'brown': '#C0A588',
                'green-zen': '#588263',
                'pink-zen': '#fe6da7',
            },
            // PENAMBAHAN BARU UNTUK ANIMASI TEKS
            keyframes: {
                'reveal-up': {
                    '0%': { transform: 'translateY(100%)', opacity: '0' },
                    '100%': { transform: 'translateY(0)', opacity: '1' },
                },
            },
            animation: {
                'reveal-up': 'reveal-up 1s cubic-bezier(0.2, 1, 0.3, 1) forwards',
            },
        },
    },

    plugins: [],
}