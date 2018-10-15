var elixir = require('laravel-elixir')
var gulp = require('gulp')
var uglify = require('gulp-uglify'),
    concat = require('gulp-concat'),
    deporder = require('gulp-deporder'),
    stripdebug = require('gulp-strip-debug');

folder = {
    src: 'js/',
    build: 'js/build/'
  }

elixir(function(mix){
    gulp.task('js', function() {
  gulp.src('js/app.js')
    .pipe(uglify())
  .pipe(concat('script.js'))
  .pipe(gulp.dest('public'))
});
    mix.webpack([
        './js/app.js',
    ]);
});



//gulp.task('js', function() {
//
//  var jsbuild = gulp.src(folder.src + 'app.js')
//    .pipe(deporder())
//    .pipe(concat('main.js'));
//
////  if (!devBuild) {
//    jsbuild = jsbuild
//      .pipe(stripdebug())
//      .pipe(uglify());
////  }
//
//  return jsbuild.pipe(gulp.dest(folder.build + ''));
//
//});