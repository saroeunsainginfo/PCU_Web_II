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
                "default-sans": ["Roboto", "Hanuman", "sans-serif"],
                "default-sans-member": ["Oxanium", "Hanuman", "sans-serif"],
                koulen: ["Koulen", "sans-serif"],
                trebuchet: ["Trebuchet", "Hanuman", "sans-serif"],
            },
            fontWeight: {
                normal: "400",
                medium: "500",
                bold: "700",
            },
            height: {
                "38px": "38px",
            },
            borderWidth: {
                1.5: "1.5px",
            },

            colors: {
                primaryColor: "#001c55",
                onFocusPrimaryColor: "#0D294F",
                scaffoldBackground: "#F7F7F7",
                scaffoldMemberBackground: "#151D32",
                danger: "#F34141",
                dangerHover: "#ce3838",
                warning: "#FC6510",
                orangeColor: "#FF9900",
                orangeHoverColor: "#e68b01",
                focusColor: "#bcbcbc",
                placeholderColor: "#E1E1E1",
                whiteHover: "#F8F8F8",
                greyColor: "#7D7D7D",
                greyColorBorder: "#C9C9C9",
                lightGreyColor: "#F5F7FA",
                lightGreyHoverColor: "#E8EAED",
                greyBorderColor: "#E5E5E5",
                lightBlueHover: "#244F8B",
                secondaryColor: "#EAEAEA",
                greenColor: "#46C25F",
                greenHoverColor: "#36a84d",
                yellowColor: "#FFD363",
                toTalTableColor: "#F8FAFD",
                blueColor: "#2980FF",
                blueHoverColor: "#216edf",
                defaultColor: "#293046",
                "vtd-primary": "#163F78",
                "vtd-primary-500": "#163F78",
                "vtd-primary-600": "#163F78",
                "vtd-secondary": "#ffffff",

                login: {
                    "primary-color": "#062F6E",
                    "light-primary-color": "#ADD8E6",
                    "light-blue-border": "#0644a3",
                    "light-primary-start": "#ADD8E6",
                    "light-primary-end": "#77ACC0",
                    "sport-background": "#0D0F39",
                    "secondary-color": "#FF7F00",
                    "secondary-hover-color": "#E56700",
                    "background-white": "#F5F5F5",
                    "info-color": "#4174AB",
                    "light-blue-button": "#161A3D",
                    "game-and-casino-background": "#0D0F39",
                    "dark-background": "#121329",
                    "gray-border": "#d4d4d4",
                    "primary-black": "#212121",
                    "yellow-color": "#FBC200",
                    "yellow-color-hover": "#FFCE28",
                    "red-color": "#FF0000",
                    "border-color": "#6D6D6D",

                    perfectZone: {
                        "primary-color": "#01664F",
                        "primary-color-hover": "#014129",
                        "dark-primary-color-hover": "#032810",
                        "secondary-color": "#FFEB3B",
                        "black-color": "#121212",
                        "gray-color": "#555555",
                        "green-color": "#64DD17",
                        "gold-color": "#EFE89F",
                    },
                },

                cockfight: {
                    "light-green": "#FFD363",
                    "light-grey": "#464E63",
                    "green-border": "#796D51",
                    meron: "#F34141",
                    tie: "#4DD25A",
                    wala: "#2980FF",

                    trader: {
                        "light-green": "#FFD363",
                        "light-grey": "#464E63",
                        "green-border": "#796D51",
                        "dark-blue": "#0277BD",
                        "medium-green": "#F4C447",
                        orange: "#DF7B33",
                        "orange-hover": "#ca6d2a",
                        "dark-grey": "#6F6F6F",
                        "dark-grey-hover": "#535353",
                        "tie-hover": "#36a84d",
                    },
                },

                "fan-tan": {
                    "light-green": "#FFD363",
                    "light-grey": "#464E63",
                    "green-border": "#796D51",
                    odd: "#F34141",
                    even: "#1A237E",

                    "bet-place": {
                        "light-grey": "#0097A7",
                        "medium-grey": "#00838F",
                        border: "#989898",
                        "1fan": "#FFFFFF",
                        "1fan-from": "#FFFFFF",
                        "1fan-to": "#888482",
                        "2fan": "#7DA85F",
                        "2fan-from": "#D8F68B",
                        "2fan-to": "#598C2F",
                        "3fan": "#EAA330",
                        "3fan-from": "#F6E367",
                        "3fan-to": "#EAA330",
                        "4fan": "#F34141",
                        "4fan-from": "#EA9033",
                        "4fan-to": "#F34141",
                    },
                },

                lobby: {
                    "purple-color": "#49476C",
                    "green-border": "#796D51",
                    "dark-yellow": "#F3AE00",
                    "yellow-color": "#FFD363",
                    "blue-color": "#007AFF",
                    "blue-border": "#6692D5",
                    "red-color": "#F34141",
                    "green-color": "#4aac00",
                    "black-yellow": "#2A2A2A",
                    "grey-color": "#7D7D7D",
                    "background-color": "#151D32",
                    "input-color": "#383D4E",
                    "input-color-hover": "#909198",
                    "gray-color": "#374151",
                },

                trader: {
                    "default-color": "#293046",
                    "purple-color": "#49476C",
                    "green-border": "#796D51",
                    "dark-blue": "#1A237E",
                    "blue-color": "#007AFF",
                    "blue-hover": "#0966CB",
                    "red-color": "#F34141",
                    "red-hover": "#CE3B3B",
                    "dark-green": "#7DA85F",
                    "dark-green-hover": "#4f7134",
                    "dark-yellow": "#EAA330",
                    "dark-yellow-hover": "#c58a29",
                    "yellow-color": "#FFD363",
                    "1fan": "#FFFFFF",
                },
            },

            animation: {
                "before-login-marquee": "marquee 45s linear infinite",
                "before-login-marquee1": "marquee1 45s linear infinite",
                "before-login-marquee2": "marquee1 45s linear infinite",
                "bounce-animation": "bounce-sport 2s infinite",
                "bounce-icon": "bounce-icon 1s infinite",
                heartbeat: "heartbeat 1s cubic-bezier(0.4, 0, 0.6, 1) infinite",
                "cockfight-heartbeat":
                    "heartbeat2 1s cubic-bezier(0.4, 0, 0.6, 1) infinite",
                "scale-5": "scale-5 1s linear infinite",
            },

            keyframes: {
                marquee: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-140%)" },
                },
                marquee1: {
                    "0%": { transform: "translateX(140%)" },
                    "100%": { transform: "translateX(0%)" },
                },
                marquee2: {
                    "0%": { transform: "translateX(0%)" },
                    "100%": { transform: "translateX(-100%)" },
                },
                "bounce-sport": {
                    "0%, 100%": {
                        transform: "translateY(-5%)",
                        animationTimingFunction: "cubic-bezier(0.5, 0, 1, 1)",
                    },
                    "50%": {
                        transform: "translateY(0)",
                        animationTimingFunction: "cubic-bezier(0, 0, 0.5, 1)",
                    },
                },
                "bounce-icon": {
                    "0%, 100%": {
                        transform: "translateY(-8%)",
                        animationTimingFunction: "cubic-bezier(0.5, 0, 1, 1)",
                    },
                    "50%": {
                        transform: "translateY(0)",
                        animationTimingFunction: "cubic-bezier(0, 0, 0.5, 1)",
                    },
                },
                heartbeat: {
                    "0%, 100%": {
                        opacity: 0.5,
                    },
                    "50%": {
                        opacity: 0,
                    },
                },
                heartbeat2: {
                    "0%, 100%": {
                        opacity: 0.7,
                    },
                    "50%": {
                        opacity: 0.3,
                    },
                },
                "scale-5": {
                    "0%, 100%": { transform: "scale(100%)" },
                    "50%": { transform: "scale(105%)" },
                },
            },
            aspectRatio: {
                "1/2": "1 / 0.5",
            },
        },
    },
    plugins: [require("tailwind-scrollbar-hide")],
};
