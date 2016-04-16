// Sample project configuration.
module.exports = function(grunt) {

    grunt.initConfig({
        concat: {
            dist: {
                src: [
                    'js/src/vendor/jquery.min.js',
                    'js/src/vendor/greensock/TweenMax.min.js',
                    'js/src/vendor/jquery.maskedinput.min.js',
                    'js/src/vendor/owl-carousel/owl.carousel.js',
                    'js/src/vendor/fancySelect/fancySelect.js',
                    'js/src/vendor/greensock/ScrollToPlugin.min.js',
                    'js/src/vendor/jquery.dotdotdot.min.js',
                    'js/src/vendor/dragScroll.js',
                    'js/src/vendor/html5Placeholder.js',
                    'js/src/vendor/doTransform.js',
                    'js/src/vendor/masks.js',
                    'js/src/vendor/velocity.js',
                    'js/src/app/**/*.js',
                    'js/src/vendor/mobile/snap.svg-min.js',
                    'js/src/vendor/mobile/classie.js',
                    'js/src/vendor/mobile/main3.js',
                ],
                dest: 'js/app.min.js'
            }
        },
        uglify: {
            my_target : {
                options : {
                    sourceMap : false,
                    sourceMapName : 'sourceMap.map'
                },
                // We'll be using a common JS for all the sites
                files : {
                    'js/app.min.js' : [
                        'js/app.min.js'
                    ]
                }
            }
        },
        compass: {
            dev: {
                dist: {
                    options: {
                        sassDir: 'css/scss',
                        cssDir: 'css',
                        outputStyle: 'nested'
                    }
                }
            },
            prod: {
                dist: {
                    options: {
                        sassDir: 'css/scss',
                        cssDir: 'css',
                        outputStyle: 'nested'
                    }
                }
            }
        },
        watch: {
            watch_js_files: {
                files : ['js/src/**/*.js'],
                tasks : ['concat']
            },
            watch_css_files: {
                files : ['css/scss/**/*.scss'],
                tasks : ['compass:dev']
            }
        }
    });

    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compass');
    grunt.loadNpmTasks('grunt-contrib-jshint');

    // Default, to be used on development environments
    grunt.registerTask('default', ['compass:dev', 'concat', 'watch']); // First we compile and concat JS and then we watch

    // Post Commit, to be executed after commit
    grunt.registerTask('deploy', ['concat', 'uglify', 'compass:prod']);

};