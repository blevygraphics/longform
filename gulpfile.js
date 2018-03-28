// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('wp-content/themes/longform/assets/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('wp-content/themes/longform/dist/css'));
});

// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('wp-content/themes/longform/assets/distjs/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('wp-content/themes/longform/dist/js'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('wp-content/themes/longform/dist/js'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('wp-content/themes/longform/assets/js/*.js', ['scripts']);
    gulp.watch('wp-content/themes/longform/assetsscss/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['sass', 'scripts', 'watch']);