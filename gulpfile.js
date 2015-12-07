
/* The require statement tells Node to look into the node_modules folder for a package named gulp. Once the package is found, we assign its contents to the variable gulp. */

var gulp = require('gulp');

/*task-name refers to the name of the task, which would be used whenever you want to run a task in Gulp. You can also run the same task in the command line by writing gulp task-name. */

gulp.task('task-one', function () {
	// body...
});