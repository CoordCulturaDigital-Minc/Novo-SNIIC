var gulp = require('gulp');

gulp.task('default', ['stylesheets', 'bower']);

gulp.task('javascript', function () {
  var sourcemaps = require('gulp-sourcemaps');
      coffee = require('gulp-coffee');

  return gulp.src('./javascript/*.coffee')
    .pipe(sourcemaps.init())
    .pipe(coffee({bare: true}))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./javascript/'))
});

gulp.task('stylesheets', function () {
  var postcss = require('gulp-postcss');
      nano = require('gulp-cssnano');
      rename = require ('gulp-rename');
      sourcemaps = require('gulp-sourcemaps');

  var precss = require('precss');
      autoprefixer = require('autoprefixer');
      cssnext = require('cssnext');

  return gulp.src('./*.pcss')
    .pipe(sourcemaps.init())
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
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./'));
});

gulp.task('bower', function() {
  var bower = require('gulp-bower');

  return bower();
});

gulp.task('watch', function() {
  gulp.watch(['javascript/*.coffee'], ['javascript']);
  gulp.watch(['*.pcss', 'stylesheets/*.pcss'], ['stylesheets']);
});
