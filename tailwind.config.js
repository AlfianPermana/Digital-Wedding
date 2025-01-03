/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                coklat: "#39291C",
                coklattua: "#9F724E",
                biru: "#5E6572",
                crime: "#FFF7EE",
                coklatemas: "#74583E",
            },
            fontFamily: {
                dancing: ["Dancing Script", "cursive"],
                garamond: ['"EB Garamond"', "serif"],
                poppins: ["Poppins", "serif"],
            },
            backgroundImage: {
                "gradient-to-bottom-left":
                    "radial-gradient(circle at bottom left, #5E6572, #3A3F48)",
            },
        },
    },
    plugins: [],
};
