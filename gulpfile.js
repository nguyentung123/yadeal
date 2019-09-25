var gulp        = require('gulp');
var browserSync = require('browser-sync');
var reload      = browserSync.reload;
var minify      = require('gulp-minify');
var minifyCss   = require('gulp-minify-css');
var imagemin    = require('gulp-imagemin');
var pngquant    = require('imagemin-pngquant');
var sass        = require('gulp-sass');
var plumber     = require('gulp-plumber');

// Values: nested, expanded, compact, compressed
gulp.task('sass', function(){
    return gulp.src('scss/*.scss')
        .pipe(plumber())
        .pipe(sass({outputStyle: 'expanded'})) // Using gulp-sass
        .on('error', function (err) {
            console.log(err.toString());
            this.emit('end');
        })
        .pipe(gulp.dest('css'));
});

gulp.task('watch', ['sass'], function () {
    browserSync({
        notify: true,
        server: {
            baseDir: '.'
        }
    });
    gulp.watch(['*.html'], reload);
    gulp.watch(['js/**'], reload);
    gulp.watch(['css/**'], reload);
    gulp.watch("scss/**", ['sass'], reload);
});

gulp.task('compress', function() {
    gulp.src('css/**')
        .pipe(minifyCss({compatibility: 'ie8'}))
        .pipe(gulp.dest('css'));

});

gulp.task('default', ['watch']);