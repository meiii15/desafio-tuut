var gulp = require('gulp');
var del = require('del');

var disThemePath = "C:/xampp/htdocs/WP/wp-content/themes/teste-tuut";
var pluginsPath = "C:/xampp/htdocs/WP/wp-content/plugins";

gulp.task('update:theme', function(){
    return gulp
        .src('theme/**/*')
        .pipe(gulp.dest(disThemePath));
});

gulp.task('watch:theme', function(){
    gulp.watch('theme/**/*', ['update:theme']);
});

gulp.task('update:plugins', function(){
    return gulp
        .src('plugins/**/*')
        .pipe(gulp.dest(pluginsPath));
});

gulp.task('watch:plugins', function(){
    gulp.watch('plugins/**/*', ['update:plugins']);
});