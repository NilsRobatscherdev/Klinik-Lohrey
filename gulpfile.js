const gulp = require('gulp');
//const { src, dest, watch, series, parallel } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const plumber = require('gulp-plumber');
const del = require('del');
const concat = require('gulp-concat');
const minifyCSS = require('gulp-minify-css');
const autoprefixer = require('gulp-autoprefixer');
const rename = require('gulp-rename');
const browsersync = require('browser-sync').create();

var srcFiles = {
    scss: 'scss/**/*.scss',
    js: 'js/**/*.js'
};

// BrowserSync
function browserSync(done) {
    browsersync.init({
        proxy: "localhost/raphaelgrasser"
    });
    done();
}

// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}

// Clean assets
function clean() {
    return del(['dist/css']);
}

// Compile sass into CSS
function styles() {
    return gulp
        .src('scss/style.scss')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(minifyCSS())
        //.pipe(clean())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('dist/css'))
        .pipe(browsersync.stream());
}

// Transpile, concatenate and minify scripts
function scripts() {
    return gulp
        .src(
            srcFiles.js
        )
        .pipe(sourcemaps.init())
        .pipe(concat('scripts.js'))
        .pipe(sourcemaps.write())
        //  .pipe(dest('dist/js'));
}

// Watch files
function watchFiles() {
    gulp.watch(srcFiles.scss, styles);
    gulp.watch(srcFiles.js, scripts);
    gulp.watch(
        [
            '**/*.php'
        ],
        gulp.series(browserSyncReload)
    );
}

function watchTask() {
    gulp.watch([srcFiles.scss, srcFiles.js],
        parallel(styles, scripts));
}

const js = gulp.series(scripts);
const watch = gulp.parallel(watchFiles, browserSync);

exports.watch = watch;
exports.js = js;

exports.default = gulp.series(styles, scripts, watch);