const mix = require("laravel-mix");

mix.js(
    [
        "public/assets/js/gallery.js",
        "public/assets/js/iframeControl.js",
        "public/assets/js/playAudio.js",
        "public/assets/js/scroll.js",
        "public/assets/js/showImage.js",
    ],"public/js"
)
    .css(
        ["public/assets/css/styles.css",
        "public/assets/css/responsive.css"
        ],"public/css"
    )
    .version();
