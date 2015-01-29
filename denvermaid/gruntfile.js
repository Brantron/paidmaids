module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {   
            dist: {
                src: [
            'js/*.js', // All JS in the libs folder
            'js/foundation/*.js', // All JS in the libs folder
            'js/vendor/*.js', // All JS in the libs folder
            'js/global.js'  // This specific file
            ],
            dest: 'js/build/production.js',
        }
    },

    uglify: {
        build: {
            src: 'js/build/production.js',
            dest: 'js/build/production.min.js'
        }
    },
    watch: {
        options: {
            livereload:true,
        },
    scripts: {
        files: ['js/*.js'],
        tasks: ['concat', 'uglify'],
        options: {
            spawn: false,}
        },
        html: {
            files: ['index.html', '**/*.html']
        },
        css: {
            files: ['css/foundation.css'],
            tasks: []
        }
    },
    uncss: {
  dist: {
  	 options: {
      ignore       : ['hover', 'click']
  },
    files: {
      'css/foundation.css': ['index.html', 'about us/about.html','book now/booknow.html','contact/contact.html','pricing/pricing.html']
      //'css/flipout_cards.css': ['index.html', 'about us/about.html','book now/booknow.html','contact/contact.html','pricing/pricing.html']
    }
  }
}
    //imagemin: { // Task
//           dynamic: {                         // Another target
//        files: [{
//        expand: true,                  // Enable dynamic expansion
//        cwd: 'img/',                   // Src matches are relative to this path
//        src: ['**/*.{png,jpg,gif}'],   // Actual patterns to match
//        dest: 'dist/'                  // Destination path prefix
//      }]
//    }
//        }
});

    // 3. Where we tell Grunt we plan to use this plug-in.
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-uncss');


    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat', 'uglify', 'uncss', 'watch']);

};