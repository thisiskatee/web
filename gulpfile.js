/*const gulp = require('gulp');

gulp.task("hello",function() {
    console.log("Hello, from Gulp!");
});
gulp.task('hello', function(callback){
    console.log("Hello, from Gulp!");
    callback();
});
gulp.task('goodbye', function(callback){
    console.log("Bye, bye, from Gulp!");
    callback();
});
gulp.task('default', gulp.parallel('hello', 'goodbye'));*/

const gulp = require("gulp");
const browserSync = require("browser-sync").create();

gulp.task('server', function() {
    browserSync.init({
        server: {
            baseDir: "./src/"
        }
    });
});

gulp.task('watch', function() {
    gulp.watch('./src/*.html', function() {
        browserSync.reload;
    })
});
/*
gulp.task('watch', function() {
    watch('./src/*.html', gulp.parallel(browserSync.reload));
});*/

gulp.task('default', gulp.parallel('server', 'watch'));
