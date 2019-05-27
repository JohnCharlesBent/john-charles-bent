var gulp = require('gulp');
var sass = require('gulp-sass');
var minifyjs = require('gulp-js-minify');
var browserSync = require('browser-sync').create();

gulp.task('browserSync', function() {
	browserSync.init({
		proxy: 'http://localhost:8888/jcbent/'
	});
});

gulp.task('sass', function() {
	return gulp.src('assets/styles/main.scss')
	.pipe(sass({outputStyle: 'compressed'}))
	.pipe(gulp.dest('dist/styles/'))
	.pipe(browserSync.reload({
		stream:true
	}))
});

gulp.task('minify-js', function() {
	gulp.src('assets/scripts/*.js')
	.pipe(minifyjs())
	.pipe(gulp.dest('dist/js'))
	.pipe(browserSync.reload({
		stream:true
	}))
});


gulp.task('watch', ['browserSync', 'sass'], function() {
	gulp.watch('assets/styles/**/*.scss', ['sass']);
	gulp.watch('assets/scripts/*.js', ['minify-js']);
	gulp.watch('*.php', browserSync.reload);
	gulp.watch('templates/**/*.php', browserSync.reload);
	gulp.watch('assets/scripts/*.js', browserSync.reload);
})
