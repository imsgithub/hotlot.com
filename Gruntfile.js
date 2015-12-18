module.exports = function(grunt) {

    // 1. Вся настройка находится здесь
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            dist: {
                src: [
                    'js/libs/jquery.js',
                    'js/libs/slick/slick.js',
                    'js/libs/jquery.datetimepicker.full.js',
                    'js/common.js'
                ],
                dest: 'js/build/global.js'
            }
        },
        uglify: {
            build: {
                src: 'js/build/global.js',
                dest: 'js/build/global.min.js',
            }
        },
        imagemin: {
            dinamic: {
                files: [{
                    expand: true,
                    cwd: 'img/src/',
                    src: ['**/*.{png,jpg,gif}'],
                    dest: 'img/build/'
                }]
            }
        },
        watch: {
            // scripts: {
            //     files: ['js/*.js'],
            //     tasks: ['concat'],
            //     options: {
            //         spawn: false,
            //         livereload: true,
            //     },
            // },
            css: {
                files: ['public/evth/public/scss/*.scss', 'public/evth/admin/scss/*.scss'],
                tasks: ['sass'],
                options: {
                    spawn: false,
                    livereload: true,
                },
            },
        },
        sass: {
            dist: {
                options: {
                    style: 'compressed',
                    compass: true
                },
                files: {
                    'public/evth/public/css/newmember.css': 'public/evth/public/scss/newmember.scss',
                    'public/evth/admin/css/newadmin.css': 'public/evth/admin/scss/newadmin.scss',
                    'public/evth/public/css/printContract.css': 'public/evth/public/scss/printContract.scss',
                }
            }
        },
    });
    require('load-grunt-tasks')(grunt);
    grunt.registerTask('default', ['watch']);

};
