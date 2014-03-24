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

    phplint: {
        options: {
            swapPath: './'
        },
        all: ['../*.php', '../elements/*.php']
    },	
	uglify: {
	    my_target: {
	      options: {
	        sourceMap: true,
	      },
	      //files: [{
	       //   expand: true,
	       //   cwd: '../js/build',
	       //   src: '**/*.js',
	       //   dest: '../js/min/'
	      //}]
	      files: {
	        '../js/min/application.min.js': ['../js/build/application.js'],
	        '../js/min/stuff.min.js': ['../js/build/stuff.js'],
	      }	      
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
	cssmin: {
	  add_banner: {
	    options: {
	      banner: '/* project.css minified */'
	    },
	    files: {
	      '../css/project.min.css': ['../css/project.css']
	    }
	  }
	},  		
	// running `grunt watch` will watch for changes
	watch: {
		css: {
			files: "../css/less/*.less",
			tasks: ["less", "cssmin"],
			options: {
	      		livereload: 35722,
	    	},
    	},
    	php: {
    		files: "../**/*.php",
    		tasks: ["phplint"],
    		options :{
    			livereload:35722,
    		},
    	},
    	scripts: {
		    files: ['../js/build/**/*.js'],
		    tasks: ['jshint', 'uglify'],
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
	grunt.loadNpmTasks("grunt-phplint");
	grunt.loadNpmTasks('grunt-contrib-cssmin');

};