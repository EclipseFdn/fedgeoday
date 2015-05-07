module.exports = function(grunt) {
    // Initializing the configuration object
    grunt.initConfig({
        copy: {
            main: {
                files: [
                // includes files within path
                {
                    expand: true,
                    flatten: true,
                    src: ['bower_components/bootstrap/fonts/*'],
                    dest: './2015/fonts/',
                    filter: 'isFile'
                },
                {
                    expand: true,
                    flatten: true,
                    src: ['bower_components/fontawesome/fonts/*'],
                    dest: './2015/fonts/',
                    filter: 'isFile'
                },
                ]
            }
        },
        // Task configuration
        less: {
            development: {
                options: {
                    compress: true,
                    // minifying the result
                },
                files: {
                    // compiling styles.less into styles.css
                    './2015/css/main.min.css': './2015/src/less/main.less'
                }
            }
        },
        concat: {
            options: {
                separator: ';',
            },
            js_frontend: {
                src: [
                      './bower_components/jquery/dist/jquery.js',
                      './bower_components/bootstrap/dist/js/bootstrap.min.js',
                      './2015/src/js/plugins.js', 
                      './2015/src/js/main.js'
                      ],
                dest: './2015/js/main.js',
            },
        },
        uglify: {
            options: {
                mangle: false
                // Use if you want the names of your functions and variables
                // unchanged.
            },
            frontend: {
                files: {
                  './2015/js/main.min.js' : './2015/js/main.js',
                }
            },
        },
        watch: {
            js_frontend: {
                files: [
                // watched files
                './bower_components/bootstrap/dist/js/bootstrap.js', 
                './2015/src/js/main.js',
                './2015/src/js/plugins.js',
                ],
                // tasks to run
                tasks: ['concat:js_frontend', 'uglify:frontend'],
            },
            less: {
                files: ['./2015/src/less/*.less', 
                        './2015/src/less/**/*.less'
                        ],
                // watched files
                tasks: ['less'],
                // tasks to run
            },
        }
    });
    // Plugin loading
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-copy');
    // Task definition
    grunt.registerTask('default', ['watch']);
};