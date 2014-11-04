module.exports = function (grunt) {
  grunt.initConfig({
    // Watch task config
    watch: {
      sass: {
        files: "assets/styles/scss/*.scss",
        tasks: ['sass']
      }
    },
    // SASS task config
    sass: {
        dev: {
            files: {
                "assets/styles/css/styles.css" : "assets/styles/scss/styles.scss"
            }
        }
    },

	browserSync: {
	  default_options: {
	    bsFiles: {
	      src: [
	        "assets/styles/css/style.css"
	      ]
	    },
	    options: {
	      watchTask: true,
	      proxy: "snap3.local"
	    }
	  }
	},


  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.registerTask('default', ['browserSync', 'watch']);
};