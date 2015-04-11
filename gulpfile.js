var gulp = require('gulp'),
 	compass = require('gulp-compass'),
 	filter = require('gulp-filter'),
 	minifyCss = require('gulp-minify-css'),
 	useref = require('gulp-useref'),
 	gConcat = require('gulp-concat'),
	uglify = require('gulp-uglify')
;

var jsFilter = filter(js_path+'**/*.js');
var cssFilter = filter(css_path+'concat.css');

var scss_path = 'app/Resources/sass/';
var css_path = 'app/Resources/css/';

var js_path = 'app/Resources/js/';

var img_path = 'app/Resources/img/';


gulp.task('js', [ 'minJs'],function(){
	
});

		gulp.task('concatJs', function(){
			return gulp.src(js_path+'**/*.js')
				.pipe(gConcat('min.js'))
				.pipe(gulp.dest(js_path));
				
		});
		gulp.task('minJs', ['concatJs'], function(){
			return gulp.src(js_path+'min.js')
				.pipe(jsFilter)
				.pipe(uglify())
				.pipe(jsFilter.restore())
				.pipe(gulp.dest('web/js'));
		});


		

gulp.task('css', ['minifyCss'], function(){

});

			gulp.task('compass', function(){
				return gulp.src(scss_path+'master.scss')
					.pipe(compass({
						css: css_path,
						sass: scss_path,
						image: img_path,
					}))
					.pipe(gulp.dest(css_path));
					
			});

			gulp.task('concatCss', ['compass'], function(){
				return gulp.src(css_path+'**/*.css')
					.pipe(gConcat('min.css'))
					.pipe(gulp.dest(css_path));
					
			});

			gulp.task('minifyCss', ['concatCss'],  function(){
				return gulp.src(css_path+'min.css')
					.pipe(cssFilter)
					.pipe(minifyCss())
					.pipe(cssFilter.restore())
					.pipe(gulp.dest('web/css/'));
					
			});



gulp.task('default',['css', 'js'], function(){
	
});


gulp.task('watch', function(){
	gulp.watch(js_path+'**/*.js', ['js']);
	gulp.watch(scss_path+'**/*.scss', ['css']);
});