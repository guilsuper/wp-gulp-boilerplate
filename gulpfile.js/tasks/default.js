var gulp = require('gulp'),
	gulpSequence = require('gulp-sequence');

var defaultTask = function (callback) {
	gulpSequence('build', 'watch', callback);
}

gulp.task('default', defaultTask);
module.exports = defaultTask;