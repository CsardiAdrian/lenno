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
        },
        uglify: {
            my_target: {
                files: {
                    'build/js/main.min.js': ['build/js/main.js']
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
                tasks: ['concat:js'],
            },
            sass: {
                files: ['sass/**/*.scss'],
                tasks: ['sass:dist'],
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