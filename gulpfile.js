const bsync = require('browser-sync');
const gulp = require('gulp');
const autoprefixer = require('gulp-autoprefixer');
const sass = require('gulp-sass');

function sync(done) {
    bsync.init({
        files: [
            'src/css/**/*.css',
            'src/js/**/*.js'
        ],
        host: '192.0.0.1',
        server: './src',
        port: 8080,
        reloadDelay: 1000,
        ghostMode: false,
        notify: false
    });
    done();
}

function styles() {
    return gulp.src('src/scss/**/*.scss')
        .pipe(sass({ outputStyle: 'expanded' }).on('error', sass.logError))
        .pipe(autoprefixer({ remove: false }))
        .pipe(gulp.dest('src/css'))
        .pipe(bsync.stream());
}

function watchFiles() {
    gulp.watch('src/scss/**/*.scss', styles);
}

gulp.task('default', gulp.series(sync, styles, watchFiles));