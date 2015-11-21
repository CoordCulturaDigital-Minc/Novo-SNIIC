var gulp = require('gulp');

gulp.task('default', ['stylesheets', 'bower']);

gulp.task('stylesheets', function () {
  var postcss = require('gulp-postcss');
      nano = require('gulp-cssnano');
      rename = require ('gulp-rename');

  var precss = require('precss');
      autoprefixer = require('autoprefixer');
      cssnext = require('cssnext');

  return gulp.src('./*.pcss')
    .pipe(postcss([
      precss({
        import: ({
          prefix: 'stylesheets/_',
          extension: 'pcss'
        })
      }),
      autoprefixer,
      cssnext
    ]))
    .pipe(rename({
      extname: ".css"
    }))
    .pipe(nano())
    .pipe(gulp.dest('./'));
});

gulp.task('bower', function() {
  var bower = require('gulp-bower');

  return bower();
});
