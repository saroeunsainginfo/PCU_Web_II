/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            boxShadow: {
                shadowSide: "0 0 10px 2px rgb(0,0,0,0.3)",
                shadowlogin: "0 0 2px 0px rgb(0,0,0,0.2)",
            },
            colors:{
                colorBtnLogin: '#0d47a1',
                colorBtnLoginHover: '#1565c0'
            }
        },
    },
    plugins: [require("tailwind-scrollbar-hide")],
};
