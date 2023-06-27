var config = require('../config');

var options = config.tasks.php;
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
		.pipe(plugins.htmlmin(options.htmlmin))
		.pipe(gulp.dest(dest));
}

gulp.task('php', task);
module.exports = task;