var config = require('../config');

var options = config.tasks.styles;
if (!options) return;

var browserSync = require('browser-sync'),
	gulp = require('gulp'),
	plugins = require('gulp-load-plugins')({
		camelize: true
	});

var task = function () {
	var src = config.path.src + '/**/*.{' + options.extensions + '}',
		dest = global.dist ? config.path.dist : config.path.build;

	return gulp.src(src)
		.pipe(plugins.changed(dest))
		.pipe(plugins.if(!global.dist, plugins.sourcemaps.init()))
		.pipe(plugins.sassGlob())
		.pipe(plugins.sass(options.sass))
		.pipe(plugins.cssnano(options.cssnano))
		.pipe(plugins.if(!global.dist, plugins.sourcemaps.write('.')))
		.pipe(gulp.dest(dest))
		.pipe(browserSync.stream());
}

gulp.task('styles', task);
module.exports = task;