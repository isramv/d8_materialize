var gulp = require('gulp'),
    postcss = require('gulp-postcss'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    shell = require('gulp-shell');
var autoprefixer = require('gulp-autoprefixer');
var sass = require('gulp-sass');

gulp.task('browser-sync', function() {
  browserSync({
    server: {
       baseDir: "./"
    }
  });
});

gulp.task('styles', function() {
  gulp.src(['sass/**/*.scss'])
    .pipe(plumber({
      errorHandler: function (error) {
        console.log(error.message);
        this.emit('end');
    }}))
    .pipe(sass())
    .pipe(autoprefixer('last 2 versions'))
    .pipe(gulp.dest('stylesheets/'));
});

gulp.task('shelltest', shell.task([
    'pwd'
]));

gulp.task('default', function(){
  gulp.watch("sass/**/*.scss", ['styles','shelltest']);
  gulp.watch("*.html", ['bs-reload']);
});