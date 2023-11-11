/** @type {import('tailwindcss').Config} */
export default {
    content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    ],
    theme: {
    extend: {
        colors:{
            'peach':"#FEBBCC",
            'gold': "#E6B325",
            'silver': "#F5F7F8",
            'pink': "#D988B9",
            'deeppink':"#B0578D",
        }

    },
    fontFamily: {
        playpen:['Playpen Sans']
    }
    },
    plugins: [],
}

