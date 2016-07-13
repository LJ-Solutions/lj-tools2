'use strict';
   
/** Values **/
var gulp = require('gulp');  
var gutil = require('gulp-util');  
var ftp = require('vinyl-ftp');
var notify = require('gulp-notify');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var minifyCSS = require('gulp-minify-css');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');

/** Directories **/
var targetCss = 'production/css/',
    targetSass = 'production/sass/',
    targetJs = 'production/js/';
    
/** Configuration FTP**/
var user = 'lajaiba2';  
var password = 'LJsolutions1?';  
var host = 'ftp.lj-solutions.com';  
var localFilesGlob = ['production/**/*'];  
var remoteFolder = '/demos/ljtool2';


//FTP connection based on our configuration
function getFtpConnection() {  
  return ftp.create({
    host: host,
    user: user,
    password: password,
    parallel: 10,
    log: gutil.log
  });
}

/**
 * Browser Sync task.
 * Start proxy and run browser sync
 * change proxy for you local server
 */
gulp.task('browser-sync', function() {
  browserSync.init({
    files: ['./**/*.php'],
    injectChanges: true,
    proxy: "dev.ljtool2.com"
  });
});

/**
 * Sass task.
 * Minify css all.styles.min.css
 */
gulp.task('sass', function () {
  gulp.src(targetSass + 'all.styles.scss')
    .pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 2 version']
    }))
    .pipe(minifyCSS({
      keepBreaks: false
    }))    
    .pipe(rename({
      suffix: '.min'
    }))    
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(targetCss));
});

/**
 *Watch Sass task.
 * Reload browser and minify when one file scss is chaged 
 */
gulp.task('watch-sass', function() {
  gulp.watch(targetSass + '**/*.scss', ['sass']).on('change', browserSync.reload);
});


/**
 * Minifyjs task.
 * Minify js ljtool2 
 */
gulp.task('minify-js', function() {
  gulp.src(targetJs + 'ljtool2.js')
    .pipe(uglify())
    .pipe(rename({
      suffix: '.min'
    }))
    .pipe(gulp.dest(targetJs))
    .pipe(notify('Js, Prefixed and Minified'))
    .pipe(sourcemaps.write('.'));
});

/**
 *Watch js task.
 * Reload browser and minify when one file js is chaged 
 */
gulp.task('watch-js', function() {
  gulp.watch(targetJs + '**/*.js', ['minify-js']).on('change', browserSync.reload);
});

/**
 * Deploy ftp task.
 * 
 */
gulp.task('ftp-deploy', function() {
  var conn = getFtpConnection();
  return gulp
  .src(localFilesGlob, { base: '.', buffer: false })
  .pipe(conn.newer(remoteFolder)) // only upload newer files 
  .pipe(conn.dest(remoteFolder))
  .pipe(notify('Uploaded file: <%= file.relative %>' + ' in ftp server: ' + host));
});

//Run all task
gulp.task('codes', ['watch-sass', 'watch-js']);
gulp.task('ftp-deploy');
//gulp.task('default', ['browser-sync', 'codes', 'ftp-deploy']);
gulp.task('default', ['browser-sync', 'codes']);