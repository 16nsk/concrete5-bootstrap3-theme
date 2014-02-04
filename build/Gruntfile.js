module.exports = function(grunt) {
	grunt.initConfig({
		// running `grunt less` will compile once.
		less: {
			development: {
				options: {
					paths: ["../css"],
					yuicompress: true
				},
			files: {
				"../css/project.css": "../css/less/project.less"
			}
		},


	},
		uglify: {
		    my_target: {
		      files: [{
		          expand: true,
		          cwd: '../js/build',
		          src: '**/*.js',
		          dest: '../js/min/'
		      }]
		    }
	},	
  	jshint: {
  		options: {
	      curly: true,
	      eqeqeq: true,
	      eqnull: true,
	      browser: true,
	      globals: {
	        jQuery: true
	      },
	    },
    	all: ['../js/build/**/*.js']
  	},	
	// running `grunt watch` will watch for changes
	watch: {
		css: {
			files: "../css/less/*.less",
			tasks: ["less"],
			options: {
	      		livereload: true,
	    	},
    	},
    	php: {
    		files: "../**/*.php",
    		options :{
    			livereload:true,
    		},
    	},
    	scripts: {
		    files: ['../js/build/**/*.js'],
		    tasks: ['jshint'],
		    options: {
		    	spawn: false,
		    },
		},
	}
});
	grunt.loadNpmTasks('grunt-contrib-less');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-jshint');
	grunt.loadNpmTasks('grunt-contrib-uglify');
};