module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    copy: {
      dist: {
        files: [
          {
            src: '*.*',
            dest: 'build/fonts/',
            cwd: require("node-font-awesome").fonts.replace(/\*$/, ""),
            expand: true
          }
        ],
      },
    },

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

    watch: {
      options: {
        livereload: true,
      },

      css: {
        files: 'styles/**/*.scss',
        tasks: ['sass'],
      },

      php: {
        files: '**/*.php',
      },
    },
  });

  grunt.registerTask('build', ['copy', 'sass']);
  grunt.registerTask('default', ['build', 'watch']);
};
