var gulp = require('gulp');
var webpack = require('webpack');
var browserSync = require('browser-sync').create();
var sass = require('gulp-sass');


gulp.task('sass',function(){
  return gulp.src('scss/*.scss')
    .pipe(sass())
    .on('error', swallowError)
    .pipe(gulp.dest('css'))
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