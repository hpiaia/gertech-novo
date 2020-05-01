module.exports = {
    purge: ['./resources/views/**/*.blade.php'],
    theme: {
        fontFamily: {
            sans: 'Roboto, sans-serif'
        },
        rotate: {
            '10': '10deg'
        },
        extend: {
            colors: {
                primary: '#002e52',
                secondary: '#df1d17',
                'secondary-dark': '#b11712'
            }
        }
    },
    variants: {},
    plugins: [require('@tailwindcss/custom-forms')]
};
