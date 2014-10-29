/**
 * Created by Matthew on 28/10/2014.
 */

var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('default', ['sass', 'watch']);

gulp.task('sass', function () {
    gulp.src('src/Outlandish/SiteBundle/Resources/private/scss/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('./maps'))
        .pipe(gulp.dest('src/Outlandish/SiteBundle/Resources/public/css'));
    gulp.src('vendor/outlandish/acadoowp-bundle/Outlandish/AcadOowpBundle/Resources/private/scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('vendor/outlandish/acadoowp-bundle/Outlandish/AcadOowpBundle/Resources/public/css'));
});

gulp.task('watch', function() {
    // Watch .scss files
    gulp.watch([
        'src/Outlandish/SiteBundle/Resources/private/scss/*.scss',
        'vendor/outlandish/acadoowp-bundle/Outlandish/AcadOowpBundle/Resources/private/scss/*.scss'], ['sass']);
});

