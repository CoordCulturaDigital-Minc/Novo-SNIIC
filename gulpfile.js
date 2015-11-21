var gulp = require('gulp');
var rename = require ('gulp-rename');

gulp.task('default', ['stylesheets', 'bower']);

var postcss = require('gulp-postcss');

gulp.task('stylesheets', function () {
  return gulp.src('./*.pcss')
    .pipe(postcss([
      require('precss')({
        import: ({
          prefix: 'stylesheets/_',
          extension: 'pcss'
        })
      }),
      require('postcss-discard-comments'),
      require('autoprefixer'),
      require('postcss-calc')
    ]))
    .pipe(rename({
      extname: ".css"
    }))
    .pipe(gulp.dest('./'));
});

var bower = require('gulp-bower');

gulp.task('bower', function() {
  return bower('./dependencies');
});

gulp.task('watch', function() {
  gulp.watch('stylesheets/*', ['stylesheets']);
  gulp.watch(['.bowerrc', 'bower.json'], ['bower']);
});
