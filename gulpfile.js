const gulp = require("gulp");
const plumber = require("gulp-plumber");
const sourcemap = require("gulp-sourcemaps");
const less = require("gulp-less");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const terser = require("gulp-terser");
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");
const sync = require("browser-sync").create();
const del = require("del");
const rename = require("gulp-rename");
const csso = require("postcss-csso");
const htmlmin = require("gulp-htmlmin");

// Styles

const styles = () => {
  return gulp.src('source/less/style.less', { sourcemaps: true })
    .pipe(plumber())
    .pipe(less())
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(gulp.dest('source/css', { sourcemaps: '.' }))
    .pipe(browser.stream());
}

exports.styles = styles;

// Server

const server = (done) => {
  browser.init({
    server: {
      baseDir: 'source'
    },
    cors: true,
    notify: false,
    ui: false,
  });
  done();
}

exports.server = server;

// Watcher

const watcher = () => {
  gulp.watch("source/less/**/*.less", gulp.series(style));
  gulp.watch("source/js/script.js", gulp.series(scripts));
  gulp.watch("source/*.html", gulp.series(html, reload));
}

// Clean
const clean = () => {
  return del('build');
};

// Copy
const copy = (done) => {
  return gulp.src([
    'source/fonts/*.{woff2,woff}',
    'source/*.ico',
    'source/img/icon.svg',
    'source/img/logo-pink.svg',
    'source/img/watch.svg'
  ], {
    base: 'source'
  })
    .pipe(gulp.dest('build'))
  done();
}

exports.copy = copy;

// Images
const optimizeImages = () => {
  return gulp.src('!source/img/icon.svg',
    '!source/img/logo-pink.svg',
    '!source/img/watch.svg',
    'source/img/**/*.{png,jpg,svg}')
    .pipe(imagemin([
      imagemin.mozjpeg({progressive: true}),
      imagemin.optipng({optimizationLevel: 3}),
      imagemin.svgo()
    ]))
    .pipe(gulp.dest("build/img"))
}

exports.images = optimizeImages;

// Style

const style = async () => {
  return gulp.src('source/less/style.less', { sourcemaps: true })
    .pipe(plumber())
    .pipe(less())
    .pipe(rename('style.css'))
    .pipe(gulp.dest('build/css', { sourcemaps: '.' }))
    .pipe(postcss([
      autoprefixer(),
      csso()
    ]))
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('build/css', { sourcemaps: '.' }))
    .pipe(browser.stream());
}

exports.style = style;

// HTML
const html = () => {
  return gulp.src('source/*.html')
    .pipe(htmlmin({
      collapseWhitespace: true,
      removeComments: true
    }))
    .pipe(gulp.dest('build'));
}

// Scripts
const scripts = () => {
  return gulp.src("source/js/script.js")
    .pipe(terser())
    .pipe(rename("script.min.js"))
    .pipe(gulp.dest("build/js"))
    .pipe(sync.stream());
}

exports.scripts = scripts;

// WebP
const createWebp = () => {
  return gulp.src("source/img/**/*.{jpg,png}")
    .pipe(webp({quality: 90}))
    .pipe(gulp.dest("build/img"))
}

exports.createWebp = createWebp;

// Build
const build = gulp.series(clean, copy, optimizeImages, gulp.parallel(style, html, scripts, createWebp));

exports.build = build;

// Start
const start = gulp.series(build, server);

exports.start = start;

// Default
exports.default = gulp.series(styles, server, watcher);
