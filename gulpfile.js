var gulp = require('gulp');
var rename = require ('gulp-rename');

var bower = require('gulp-bower');

gulp.task('bower', function() {
  return bower('./dependencies');
});

gulp.task('watch', function() {
  gulp.watch('stylesheets/*', ['stylesheets']);
  gulp.watch(['.bowerrc', 'bower.json'], ['bower']);
});
