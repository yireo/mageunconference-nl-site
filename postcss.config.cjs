const postcssSass = require('@csstools/postcss-sass');
const tailwindPostcss = require("@tailwindcss/postcss");

module.exports = {
    syntax: 'postcss-scss',

    plugins: [
        tailwindPostcss(),
        postcssSass(),
    ],
};
