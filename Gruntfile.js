module.exports = function(grunt) {

  require('load-grunt-tasks')(grunt);

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    babel: {
      options: {
        sourceMap: true,
        presets: ['es2015']
      },
      dist: {
        files: [
          {
            src: 'app.js',
            dest: 'build/js',
            cwd: 'js',
            expand: true
          },
          {
            src: '*.js',
            dest: 'build/js/pages',
            cwd: 'js/pages',
            expand: true
          }
        ],
      }
    },

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
          loadPath: [
            'node_modules/susy/sass',
            require('path').dirname(require.resolve('normalize-scss'))
          ].concat(require("node-font-awesome").scssPath)
           .concat( require("bourbon").includePaths)
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

      js: {
        files: 'js/**/*.js',
        tasks: ['babel'],
      },

      php: {
        files: '**/*.php',
      },
    },
  });

  grunt.registerTask('build', ['copy', 'babel', 'sass']);
  grunt.registerTask('default', ['build', 'watch']);
};
