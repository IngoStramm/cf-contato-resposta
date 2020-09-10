/* jshint node:true */
module.exports = function (grunt) {
    'use strict';

    require('load-grunt-tasks')(grunt);

    var odinConfig = {

        // gets the package vars
        pkg: grunt.file.readJSON('package.json'),

        // setting folder templates
        dirs: {
            tmp: 'tmp'
        },

        // zip the theme
        zip: {
            dist: {
                cwd: '../../',
                src: [
                    '../**',
                    '!../src/**',
                    '!../dist/**',
                    '!../**.md',
                    '!../**.zip',
                    '!../info.json',
                ],
                dest: '../dist/<%= pkg.name %>.zip'
            }
        }


    };

    // Initialize Grunt Config
    // --------------------------
    grunt.initConfig(odinConfig);

    // Register Tasks
    // --------------------------

    // Default Task
    grunt.registerTask('default', []);

    // Compress
    grunt.registerTask('compress', [
        'default',
        'zip'
    ]);

    // Short aliases
    grunt.registerTask('c', ['compress']);
};