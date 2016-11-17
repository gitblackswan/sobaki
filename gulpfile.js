var gulp = require('gulp');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sass = require('gulp-sass');
var del = require('del');
var wiredep = require('wiredep').stream;
var useref = require('gulp-useref');
var gulpif = require('gulp-if');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');
var ftp = require('gulp-ftp');
var htmlmin = require('gulp-htmlmin');
var rigger = require('gulp-rigger');
var concat = require('gulp-concat');
var concatCss = require('gulp-concat-css');

//имена папок Разработки
var style = 'src/desctop/css';
var fonts = 'src/desctop/fonts';
var image = 'src/desctop/img';
var ajax = 'src/desctop/ajax';
var js = 'src/desctop/js';

//имя папки на хосте
var host_src = 'sobaki';

//имена папок Сборки
var build_fonts = 'fonts';
var build_image = 'img';

gulp.task('sass', function() {
    return gulp.src(style + '/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(autoprefixer({
            browsers: ['last 10 versions'],
            cascade: false
        }))
        .pipe(gulp.dest(style));
});

gulp.task('img', function () {
    return gulp.src(image + '/**/*')
        .pipe(gulp.dest('dist/' + build_image));
});

gulp.task('html-rigger', function () {
    gulp.src('src/*.html') //Выберем файлы по нужному пути
        .pipe(rigger()) //Прогоним через rigger
        .pipe(gulp.dest('./src/')); //Выплюнем их в папку build
});

gulp.task('watch', function () {
    gulp.watch(style + '/sass/*.scss', ['sass']);
    gulp.watch('src/desctop/*.html');
});

gulp.task('clean', function () {
    return del.sync('dist');
});

gulp.task('files', function () {
    gulp.src(fonts + '/**/*')
        .pipe(gulp.dest('dist/' + build_fonts));
    gulp.src(ajax + '/*.php')
        .pipe(gulp.dest('dist/ajax'));
    gulp.src(style + '/*.css')
        .pipe(cleanCSS())
        .pipe(gulp.dest('dist/css'));
    gulp.src('src/desctop/*.ico')
        .pipe(gulp.dest('dist/'));
    gulp.src('src/desctop/*.htaccess')
        .pipe(gulp.dest('dist/'));
    gulp.src('src/track/*.php')
        .pipe(gulp.dest('dist/track/'));
    gulp.src(js + '/*.js')
        .pipe(uglify())
        .pipe(gulp.dest('dist/js/'));
    gulp.src('*.html')
        .pipe(htmlmin({collapseWhitespace: true}))
        .pipe(gulp.dest('dist/js/'));
});

gulp.task('concatjs', function () {
    return gulp.src(js +'/libs/*.js')
        .pipe(concat('libs.js'))
        .pipe(gulp.dest('src/desctop/js/'));
});

gulp.task('concatcss', function () {
    return gulp.src(style + '/libs/*.css')
        .pipe(concatCss("libs.css"))
        .pipe(gulp.dest(style));
});

gulp.task('bower', function () {
    gulp.src('./src/desctop/index.html')
        .pipe(wiredep({
            optional: 'configuration',
            goes: 'here'
        }))
        .pipe(gulp.dest('./src/desctop/'));
});

gulp.task('build', ['clean', 'files', 'img'], function () {
    return gulp.src('src/desctop/*.html')
        .pipe(gulp.dest('dist'));
});

gulp.task('deploy', ['build'], function () {
    return gulp.src('dist/**/*')
        .pipe(ftp({
            host: '87.236.19.39',
            user: 'kononobs_tolik',
            pass: 'Gangybasm107',
            remotePath: '/beymax.ru/public_html/demo/' + host_src
        }))
});

gulp.task('concat', ['concatjs', 'concatcss']);
gulp.task('default', ['sass', 'watch', 'concatjs', 'concatcss']);