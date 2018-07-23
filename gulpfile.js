// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass         = require('gulp-sass');
var concat       = require('gulp-concat');
var uglify       = require('gulp-uglify');
var rename       = require('gulp-rename');
var postcss      = require('gulp-postcss');
var sourcemaps   = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');

// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('wp-content/themes/longform-timber/assets/scss/*.scss')
        // Auto Prefixer
        .pipe(sourcemaps.init())
        .pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(sourcemaps.write('.'))
        // .pipe(concat('base.css'))
        .pipe(sass())
        .pipe(gulp.dest('wp-content/themes/longform-timber/dist/css'));
});


// Concatenate & Minify JS
gulp.task('scripts', function() {
    return gulp.src('wp-content/themes/longform-timber/assets/dist/js/*.js')
        .pipe(concat('all.js'))
        .pipe(gulp.dest('wp-content/themes/longform-timber/dist/js'))
        .pipe(rename('all.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('wp-content/themes/longform-timber/dist/js'));
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('wp-content/themes/longform-timber/assets/js/*.js', ['scripts']);
    gulp.watch('wp-content/themes/longform-timber/assets/scss/*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['sass', 'scripts', 'watch']);