module.exports = function (grunt) {
  grunt.initConfig({
    // Watch task config
    watch: {
      sass: {
        files: ['assets/styles/scss/**/*.scss'],
        tasks: ['sass']
      }
    },
    // SASS task config
    sass: {
        dev: {
            options: {
              style: 'compressed',
              update: true,
              noCache: true
            },
            files: [
                {
                    expand: true,
                    cwd: "assets/styles/scss",
                    src: ["**/*.scss"],
                    dest: "assets/styles/css",
                    ext: ".css"
                }
            ]
        }
    },

    // Browser Sync config
    browserSync: {
        dev: {
            bsFiles: {
                src : 'assets/styles/css/**/*.css'
            },
            options: {
                watchTask: true,
                proxy: "snap3.local"
            }
        }
    }


  });

  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-browser-sync');
  grunt.registerTask('default', ['browserSync', 'watch']);
};