var config = require('../config'),
	del = require('del'),
	gulp = require('gulp');

var task = function (callback) {
	var dest = global.dist ? config.path.dist : config.path.build;

	del(dest).then(function () {
		callback();
	});
}

gulp.task('clean', task);
module.exports = task;