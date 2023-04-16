module.exports = function(grunt) {
    // Project configuration.
    grunt.initConfig({
        sass: {
            dist: {
                files: {
                    'build/css/style.css': 'sass/style.scss'
                }
            }
        },
        concat: {
            options: {
                separator: ';',
            },
            js: {
                src: ['js/*.js'],
                dest: 'build/js/main.js',
            },
            enJS: {
                src: ['js/*.js'],
                dest: '../../../en/wp-content/themes/lenno/build/js/main.js',
            }
        },
        uglify: {
            my_target: {
                files: {
                    'build/js/main.min.js': ['build/js/main.js'],
                    '../../../en/wp-content/themes/lenno/build/js/main.min.js': ['../../../en/wp-content/themes/lenno/build/js/main.js']
                }
            }
        },
        cssmin: {
            target: {
                files: [{
                    expand: true,
                    cwd: 'build/css',
                    src: ['*.css', '!*.min.css'],
                    dest: 'build/css',
                    ext: '.min.css'
                }]
            }
        },
        watch: {
            js: {
                files: ['js/**/*.js'],
                tasks: ['concat:js', 'uglify:my_target'],
            },
            enJS: {
                files: ['js/**/*.js'],
                tasks: ['concat:enJS', 'uglify:my_target'],
            },
            sass: {
                files: ['sass/**/*.scss'],
                tasks: ['sass:dist', 'cssmin:target', 'uglify:my_target'],
            },
        },
    });

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.registerTask('default', ['sass', 'concat', 'uglify', 'cssmin', 'watch']);

}