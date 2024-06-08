/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        fontFamily: {
            montserrat: ["Montserrat Alternates", "sans-serif"],
        },
    },
    plugins: [
        require("daisyui"),
        require("tailwind-scrollbar-hide"),
        require("@tailwindcss/typography"),
    ],
};
