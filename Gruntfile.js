module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      dist: {
        options: {
          loadPath: require("node-neat").with(require("node-font-awesome").scssPath)
        },
        files: [{
          expand: true,
          cwd: 'styles',
          src: ['*.scss'],
          dest: 'build/css',
          ext: '.css'
        }]
      }
    },
  });

  grunt.registerTask('default', ['copy', 'sass']);
};
