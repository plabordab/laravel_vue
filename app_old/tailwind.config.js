const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        height:{
            "15v":"15vh",
            "10v":"10vh",
            "75v":"75vh",
            "65v":"65vh",

        },
        width:{
            "5v":"5vw",
            "10v":"10vw",
            "40v":"40vw",
            "75v":"75vw",
            "65v":"65vw",
            "85v":"85vw",
            "100v":"100vw",
        }
    },

    variants: {
        extend: {
            opacity: ['disabled'],
            backgroundColor:['even'],
        },
    },

    plugins: [require('@tailwindcss/forms')],
    rules: [
            {
                test: /.css$/,
                use: [
                    'vue-style-loader',
                    'css-loader',
                ]
            },
        {
            test:/\.vue$/,
            use:['vue-loader']
        },

    ]

};
