var gulp       = require('gulp'),
    sass       = require('gulp-sass'),
    rename     = require('gulp-rename'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer');

    gulp.task('styles', function () {
        return gulp.src('sass/theme.scss', {base: __dirname})
        	.pipe(sourcemaps.init())
            .pipe(sass())
            .pipe(autoprefixer())
            .pipe(sourcemaps.write()) // Writing sourcemaps 
            .pipe(rename(function (file) {
                // the compiled file should be stored in the css/ folder instead of the less/ folder
                file.dirname = file.dirname.replace('sass', 'css');
            }))
            .pipe(gulp.dest(__dirname));
    });

    gulp.task('watch', function () {
        gulp.watch('sass/*.scss', ['default']);
    });

    gulp.task('copy-styles', function() {
      return gulp.src('sass/vendor/*.css', {base: __dirname})
            .pipe(rename(function (file) {
                // the compiled file should be stored in the css/ folder instead of the less/ folder
                file.dirname = file.dirname.replace('sass', 'css');
            }))
            .pipe(gulp.dest(__dirname));
    });


gulp.task('default', ['styles', 'copy-styles'], function (cb) {

});