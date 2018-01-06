const postcss = require('gulp-postcss');
const rename = require('gulp-rename');
const gulp = require('gulp');
const plumber = require('gulp-plumber');
const notify = require('gulp-notify');
const browserSync = require('browser-sync').create();
const reload = browserSync.reload;
const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');

exports.css = () => {
  return gulp.src('./sass/style.scss')
    .pipe(plumber({
      errorHandler: notify.onError('<%= error.message %>')
    }))
    .pipe(sass())
    .pipe(postcss())
    .pipe(cleanCSS())
    .pipe(rename('style.css'))
    .pipe(gulp.dest('../'));
}

exports.reload = (done) => {
  reload();
  done();
}

exports.watch = () => {
  browserSync.init({
    proxy: "abrollertech.local"
  })

  return gulp.watch('./sass/**/*.scss', gulp.series(['css', 'reload']))
}