var gulp = require('gulp');
var gutil = require('gulp-util');
var sass = require('gulp-sass');
var minifyCSS = require('gulp-minify-css');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var livereload = require('gulp-livereload');
var uglify = require('gulp-uglify');
var imageResize = require('gulp-image-resize');
var compass = require('gulp-compass');
var cache = require('gulp-cache');
var webserver = require('gulp-webserver');

gulp.task('compass', function() {
  gulp.src('./scss/*.scss')
  .pipe(compass({
    css: 'css',
    sass: 'scss',
    image: './images',
    javascript: 'wp/wp-content/themes/aaronmarino/js',
    relative: true
  }))
  .pipe(minifyCSS())
  .pipe(gulp.dest('wp/wp-content/themes/aaronmarino/css'));
});

gulp.task('watch', function() {
  gulp.watch('scss/*.scss',['compass']);
  livereload.listen();
  gulp.watch('wp/**').on('change', livereload.changed);
});

gulp.task('imagemin', function() {
  return gulp.src('wp/wp-content/themes/aaronmarino/images/**/*')
    .pipe(cache(imagemin({ optimizationLevel: 6, progressive: true, interlaced: true })))
    .pipe(gulp.dest('wp/wp-content/themes/aaronmarino/images'));
});
gulp.task('webserver', function() {
  gulp.src('wp')
    .pipe(webserver({
      livereload: true
    }));
});


gulp.task('default', ['watch','compass']);
