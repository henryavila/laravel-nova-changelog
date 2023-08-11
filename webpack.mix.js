let mix = require('laravel-mix')

require('./nova.mix')
const tailwindcss = require("tailwindcss");

mix
    .setPublicPath('dist')
    .js('resources/js/tool.js', 'js')
    .vue({version: 3})
    .postCss("resources/css/tool.css", "css", [tailwindcss("tailwind.config.js")])

    .nova('crcmg/changelog')
