let mix = require('laravel-mix');

// settings / config
const css_out_dir = 'assets/css';
const js_out_dir = 'assets/js';

// css task definitions
const css_tasks = [
    {name: 'css-style', file: './src/scss/style.scss', dest: '.'},
    {name: 'css-login', file: './src/scss/login.scss', dest: css_out_dir},
    {name: 'css-slider', file: './src/scss/slider.scss', dest: css_out_dir},
    {name: 'css-editor', file: './src/scss/style-editor.scss', dest: css_out_dir},
    {name: 'css-custom-menu', file: './src/scss/custom-menu-colors.scss', dest: css_out_dir},
];


// js task definitions
const js_tasks = [
    {name: 'js-scripts', file: 'src/js/scripts.js', dest: js_out_dir, uglify: true},
    {name: 'js-editor', file: 'src/js/editor.js', dest: js_out_dir, uglify: false},
    {name: 'js-slider', file: 'src/js/slider.js', dest: js_out_dir, uglify: false},
    {name: 'js-gallery', file: 'src/js/gallery.js', dest: js_out_dir, uglify: false},
];

for (const task of css_tasks) {
    const sass_task = mix.sass(task.file, task.dest)
    if (!mix.inProduction()) {
        sass_task.sourceMaps();
    }

}

for (const task of js_tasks) {
    const mx = mix.js(task.file, task.dest)
    if (!mx.inProduction()) {
        mx.sourceMaps();
    }
}

mix.setPublicPath('dist').options({processCssUrls: false});
