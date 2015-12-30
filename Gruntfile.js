module.exports = function(grunt) {
	grunt.initConfig({


		// Configuration
		pkg: grunt.file.readJSON('package.json'),


		// Directories      // Use ex: '<%= dirs.src.js %>/main.js' -> 'src/js/main.js'
		dirs: {
			// Source
			src: {
				css: 'src/stylesheets',
				img: 'src/images',
				js: 'src/js'
			},

			// Distribution
			dist: {
				css: 'assets/css',
				img: 'assets/images',
				js: 'assets/js'
			}
		},


		// Watch our files for changes
		watch: {
			options: {
				livereload: {
					host: 'localhost',
					//port: '8888'
				}
			},

			gruntfile: {
				files: 'Gruntfile.js',
				options: {
					reload: true
				}
			},

			css: {
				files: ['<%= dirs.src.css %>/**/*.{sass,scss,css}'],
				tasks: ['sass', 'concat'],
			},

			js: {
				files: '<%= dirs.src.js %>/**/*.js',
				tasks: ['uglify:default']
			}
		},


		// Compile our SASS
		sass: {
			options: {
				outputStyle: 'expanded',
				includePaths: ['bower_components/bourbon/app/assets/stylesheets']
			},
			default: {
				files: {
					'<%= dirs.dist.css %>/main.css': '<%= dirs.src.css %>/*.{sass,scss}'
				}
			}
		},


		// Combine CSS media queries
		cmq: {
			default: {
				files: {
					src: '<%= dirs.dist.css %>/*.css'
				}
			}
		},


		// Finish off our CSS
		postcss: {
			options: {
				processors: [
					require('autoprefixer')({ // Add vendor prefixes
						browsers: [
							'last 3 versions', 
							'ie 8-9',
						]
					}),
					require('pixrem')(), // Add fallback units for rem
					//require('cssnano')(), // Minify our css
				]
			},
			default: {
				src: '<%= dirs.dist.css %>/*.css'
			}
		},


		// Combine and minify our JavaScript
		uglify: {
			build: {
				options: {
					//preserveComments: 'some'
				},
				files: '<%=uglify.default.files %>'
			},
			default: {
				options: {
					mangle: false,
					screwIE8: true,
					beautify: {
						beautify: true,
						comments: true,
						width: 50
					}
				},
				files: [

					// Main.js      // Example: script1.main.js & script2.main.js -> main.min.js
					{
						dest: '<%= dirs.dist.js %>/main.min.js',
						src: '<%= dirs.src.js %>/main/*.js',

						/**
						
							Or you can orgranize by folder   
							Example: src/main/script1.js & src/main/script2.js -> assets/js/main.min.js
							
							expand: true,
							cwd: '<%= dirs.src.js %>/main',
							src: '*.main.js',
							dest: '<%= dirs.dist.js %>',
							ext: '.min.js',
							extDot: 'last'

						**/
					},

					// Mobile.js       // Example: script1.mobile.js & script2.mobile.js -> mobile.min.js
					{
						dest: '<%= dirs.dist.js %>/mobile.min.js',
						src: '<%= dirs.src.js %>/mobile/*.js'
					},

					// Vendor          // Minified & stored separately
					{
						expand: true,
						cwd: '<%= dirs.src.js %>/vendor',
						src: '*.js',
						dest: '<%= dirs.dist.js %>/vendor',
						ext: '.min.js',
						extDot: 'last'
					},

					// Polyfills
					{
						expand: true,
						cwd: '<%= dirs.src.js %>/polyfills',
						src: '*.js',
						dest: '<%= dirs.dist.js %>/polyfills',
						ext: '.min.js'
					},

					// Slick Slider
					{
						dest: '<%= dirs.dist.js %>/slickslider.min.js',
						src: ['src/js/slick_slider.js', 'src/js/slider_settings.js']
					}

				]
			}
		},


		// Minify our images
		imagemin: {
			default: {
				options: {
					optimizationLevel: 5
				},
				files: [{
					expand: true,
					cwd: '<%= dirs.src.img %>',
					src: ['*.{png,jpg,jpeg,gif}'],
					dest: '<%= dirs.dist.img %>'
				}]
			}
		},


		// Create our SVG Sprite
		svgstore: {
			options: {
				cleanup: true,
				inheritviewbox: true,
				prefix : 'icon-', // This will prefix each ID
				svg: { // will add and overide the the default xmlns="http://www.w3.org/2000/svg" attribute to the resulting SVG
					xmlns: 'http://www.w3.org/2000/svg'
				}
			},
			default: {
				files: {
					'<%= dirs.dist.img %>/svg-sprite.svg': ['src/svg/*.svg']
				}
			},
		},


		// Copy files from src into assets
		copy: {
			default: {
				files: [
					// Images
					{
						expand: true, 
						cwd: '<%= dirs.src.img %>', 
						src: ['**'], 
						dest: '<%= dirs.dist.img %>'
					},
				],
			},
		},
		
	});


	
	// Load Plugins
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-combine-media-queries');
	grunt.loadNpmTasks('grunt-postcss');
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-imagemin');
	grunt.loadNpmTasks('grunt-svgstore');
	grunt.loadNpmTasks('grunt-contrib-copy');



	// Quick Compilation - Build Our SASS
	grunt.registerTask('build', ['sass', 'uglify:default']);

	// Developement - Watch & Build Our SASS Files
	grunt.registerTask('default', ['build', 'watch']);

	// Production - Build the files for production use
	grunt.registerTask('production', ['build', 'cmq', 'postcss', 'uglify:build', 'copy', 'imagemin', 'svgstore']);

};