/*
-----------------------------------
var module = require('module');
gulp.task - define task,
gulp.src - points to file or folders
gulp.dest - where to place the complied files.
gulp.watch - watch files folders
---------------------------------
*/
const gulp = require('gulp');
//const autoprefixer = require('gulp-autoprefixer');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const rename = require('gulp-rename');
const browserSync = require('browser-sync').create();

gulp.task('styles', function() {
    return gulp.src('devwp/src/scss/**/*.scss')
      .pipe(sass().on('error', sass.logError))
      //.pipe(autoprefixer('last 2 version'))
      .pipe(cleanCSS())
      .pipe(rename({ suffix: '.min' })) 
      .pipe(gulp.dest('devwp/dist/css')) 
      .pipe(browserSync.reload({      
           stream: true     
       }));
});
gulp.task('scripts', function() {
    return gulp.src('./devwp/src/js/*.js')
      .pipe(concat('all.js'))
      .pipe(uglify())
      .pipe(rename({ suffix: '.min' }))
      .pipe(gulp.dest('./devwp/dist/js'))
      .pipe(browserSync.reload({
           stream: true
       }));
}); 
gulp.task('watch', function() {   
    browserSync.init({
    injectChanges: true,
       proxy: "http://devwp.local/"
});
gulp.watch('./devwp/src/scss/**/*.scss', gulp.series('styles'));
gulp.watch('./devwp/src/js/*.js', gulp.series('scripts'));
gulp.watch('**/*.php').on('change', browserSync.reload); });
gulp.task('default', gulp.parallel('styles', 'scripts', 'watch'));
