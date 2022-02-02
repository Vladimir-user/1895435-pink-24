import gulp from 'gulp';
import plumber from 'gulp-plumber';
import less from 'gulp-less';
import postcss from 'gulp-postcss';
import autoprefixer from 'autoprefixer';
import browser from 'browser-sync';
import del from 'del';
import rename from 'gulp-rename';
import csso from 'postcss-csso';
import squoosh from 'gulp-libsquoosh';
import svgo from 'gulp-svgmin';
import svgstore from 'gulp-svgstore';
import minify from 'gulp-minify';
import htmlmin from 'gulp-htmlmin';
import sourcemap from 'gulp-sourcemaps';

// Watcher

const watcher = () => {
  gulp.watch('source/less/**/*.less', gulp.series(style));
  gulp.watch('source/*.html').on('change', browser.reload);
}

// Clean
export const clean = () => {
  return del('build');
};

// Copy
const copy = (done) => {
  gulp.src([
    'source/fonts/*.{woff2,woff}',
    'source/*.ico',
    'source/img/icon.svg',
    'source/img/logo-pink.svg',
    'source/img/watch.svg'
  ], {
    base: 'source'
  })
    .pipe(gulp.dest('build'));
  done();
}

// Images
const optimizeImages = () => {
  return gulp.src('source/img/**/*.{png,jpg}')
    .pipe(squoosh())
    .pipe(gulp.dest('build/img'));
}

// Style

export const style = async () => {
  return gulp.src('source/less/style.less')
    .pipe(plumber())
    .pipe(sourcemap.init())
    .pipe(less())
    .pipe(rename('style.css'))
    .pipe(gulp.dest('build/css'))
    .pipe(postcss([
      autoprefixer(),
      csso()
    ]))
    .pipe(rename('style.min.css'))
    .pipe(sourcemap.write("."))
    .pipe(gulp.dest('build/css'))
    .pipe(browser.stream());
}

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
export const scripts = () => {
  return gulp.src('source/js/script.js')
    .pipe(gulp.dest('build/js'))
    .pipe(minify())
    .pipe(rename('script.min.js'))
    .pipe(gulp.dest('build/js'))
    .pipe(browser.stream());
}

// SVG
const svg = () => {
  return gulp.src([
    'source/img/*.svg',
    '!source/img/icon.svg',
    '!source/img/logo-pink.svg',
    '!source/img/watch.svg'
  ])
    .pipe(svgo())
    .pipe(gulp.dest('build/img'));
}

// Sprite
const sprite = () => {
  return gulp.src('source/img/icons/*.svg')
    .pipe(svgo())
    .pipe(svgstore({ inlineSvg: true }))
    .pipe(rename('sprite.svg'))
    .pipe(gulp.dest('build/img'));
}

// WebP
const createWebp = () => {
  return gulp.src('source/img/**/*.{png,jpg}')
    .pipe(squoosh({ webp: {} }))
    .pipe(gulp.dest('build/img'))
}

// Server
export const server = (done) => {
  browser.init({
    server: {
      baseDir: 'build'
    },
    cors: true,
    notify: false,
    ui: false,
  });
  done();
}

// Build
export const build = gulp.series(clean, copy, optimizeImages, gulp.parallel(style, html, scripts, svg, sprite, createWebp));
export const start = gulp.series(build, server, watcher);

export default gulp.series(build, server, watcher);
