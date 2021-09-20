const gulp = require('gulp');

gulp.task("hello",function() {
    console.log("Hello, from Gulp!");
});
gulp.task("hello", function(callback){
    console.log("Hello, from Gulp!");
    callback();
});

