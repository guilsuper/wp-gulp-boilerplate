var gulp = require('gulp'),
	plugins = require('gulp-load-plugins')({
		camelize: true
	});

var distTask = function (callback) {
	global.dist = true;

	plugins.sequence('clean', 'build', callback);
}

gulp.task('dist', distTask);
module.exports = distTask;