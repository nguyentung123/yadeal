var gulp = require('gulp');
var webpack = require('webpack');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');
const minify = require('gulp-minify');
const cleanCSS = require('gulp-clean-css');
gulp.task('minify-css', () => {
  return gulp.src('./css/*.css')
              .pipe(cleanCSS({compatibility: 'ie8'}))
              .pipe(gulp.dest('./css/dist'));
});

gulp.task('compress', function() {
  gulp.src(['./js/*.js', './js/*.mjs'])
       .pipe(minify())
       .pipe(gulp.dest('./js/dist'));
});

gulp.task('sass',function(){
  return gulp.src('scss/*.scss')
    .pipe(sass())
    .on('error', swallowError)
    .pipe(gulp.dest('css'))
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(gulp.dest('./css/dist'))
    .pipe(browserSync.reload({stream:true}));
});

gulp.task('scripts', function(callback) {
  webpack(require('./webpack.config.js'), function(err, stats) {
    if (err) {
      console.log(err.toString());
    }

    console.log(stats.toString());
    callback();
  });
});

gulp.task('watch', function() {
  browserSync.init({
    server:{
      baseDir: ''
    },
  });

  gulp.watch(['js/modules/**/*.js', 'js/scripts.js'], ['waitForScripts']);
  gulp.watch('*.html',browserSync.reload);
  gulp.watch('*/*.html',browserSync.reload);
  gulp.watch('scss/**/*.scss', ['sass']);
  gulp.watch('css/**/*.css',browserSync.reload);
});

gulp.task('waitForScripts', ['scripts'], function() {
  browserSync.reload();
});

function swallowError (error) {

  // If you want details of the error in the console
  console.log(error.toString())

  this.emit('end')
}