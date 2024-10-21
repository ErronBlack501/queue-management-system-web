import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import daisyui from "daisyui";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
            },
        },
    },

    daisyui: {
        themes: [
            {
                smmcTheme: {
                    primary: "#00A651",

                    secondary: "#54595f",

                    accent: "#ffd22e",

                    neutral: "#ffffff",

                    "base-100": "#ffffff",

                    info: "#3b82f6",

                    success: "#00ff00",

                    warning: "#fcf003",

                    error: "#ff0000",
                },
            },
        ],
    },

    plugins: [forms, daisyui],
};
