var gulp = require('gulp'),
	plugins = require('gulp-load-plugins')({
		camelize: true
	});

var task = function (callback) {
	plugins.sequence('php', 'styles', callback);
}

gulp.task('build', task);
module.exports = task;