let gulp = require('gulp'),
    shell = require('gulp-shell'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),
    sourcemaps = require('gulp-sourcemaps'),
    cleanCss = require('gulp-clean-css'),
    del = require('del'),
    theme = require('./theme.json');
let resourceDir = 'resources/';
let assetsDir = 'assets/';

let resources = {
   path  : resourceDir.substr(0,resourceDir.length-1),
   css   : resourceDir + assetsDir + 'css',
   js    : resourceDir + assetsDir + 'js',
   img   : resourceDir + assetsDir + 'img',
   fonts : resourceDir + assetsDir + 'fonts',
   scss  : resourceDir + assetsDir + 'scss',
   vendor: resourceDir + assetsDir + 'vendor'
};

let assets = {
    path  : assetsDir.substr(0,assetsDir.length-1),
    css   : assetsDir + 'css',
    js    : assetsDir + 'js',
    img   : assetsDir + 'img',
    fonts : assetsDir + 'fonts',
    scss  : assetsDir + 'scss',
    vendor: assetsDir + 'vendor'
};

gulp.task('clean', function () {
    return Promise.all([
        del([
            assets.path+'/*'
        ],{force:true}),
        del([
            theme.path+'/*'
        ],{force:true})
    ]);
});

gulp.task('sass', function () {
   gulp.src([resources.scss + '/**/*.scss'])
       .pipe(sourcemaps.init({ loadMaps: true }))
       .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
       .pipe(sourcemaps.write('maps'))
       .pipe(gulp.dest(resources.css));
});

gulp.task('public-sass', function () {
    gulp.src([resources.scss + '/**/*.scss'])
        .pipe(sourcemaps.init({ loadMaps: true }))
        .pipe(sass.sync({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(sourcemaps.write('maps'))
        .pipe(gulp.dest(theme.path+'/css'));
});

gulp.task('combine', function () {

    gulp.src([
            resources.vendor + '/revolution/css/settings.css',
            resources.vendor + '/revolution/css/layers.css',
            resources.vendor + '/revolution/css/navigation.css',
        ])
        .pipe(cleanCss())
        .pipe(concat('revolution/css/revolution.css'))
        .pipe(gulp.dest(assets.css));

    gulp.src([
            resources.vendor + "/revolution/js/jquery.themepunch.tools.min.js",
            resources.vendor + "/revolution/js/jquery.themepunch.revolution.min.js",
            resources.vendor + "/revolution/js/extensions/revolution.extension.actions.min.js",
            resources.vendor + "/revolution/js/extensions/revolution.extension.carousel.min.js",
            resources.vendor + "/revolution/js/extensions/revolution.extension.kenburn.min.js",
            resources.vendor + "/revolution/js/extensions/revolution.extension.layeranimation.min.js",
            resources.vendor + "/revolution/js/extensions/revolution.extension.migration.min.js",
            resources.vendor + "/revolution/js/extensions/revolution.extension.navigation.min.js",
            resources.vendor + "/revolution/js/extensions/revolution.extension.parallax.min.js",
            resources.vendor + "/revolution/js/extensions/revolution.extension.slideanims.min.js",
            resources.vendor + "/revolution/js/extensions/revolution.extension.video.min.js"
        ])
        .pipe(concat('jquery.revolution.min.js'))
        .pipe(gulp.dest(assets.js));
});

gulp.task('copy', function() {
    gulp.src(resources.img+'/**')
        .pipe(gulp.dest(assets.img));
    gulp.src(resources.css+'/**')
        .pipe(gulp.dest(assets.css));
    gulp.src(resources.js+'/**')
        .pipe(gulp.dest(assets.js));
    gulp.src(resources.fonts+'/**')
        .pipe(gulp.dest(assets.fonts));
    //Flag icon
    gulp.src(resources.vendor+'/flag-icon-css/**')
        .pipe(gulp.dest(assets.css+'/flag-icon-css'));
    //Revolution;
    gulp.src([
        resources.vendor + '/revolution/assets/**'
    ]).pipe(gulp.dest(assets.css + '/revolution/assets'));
});

gulp.task('production', ['sass', 'combine', 'copy'], function () {
    gulp.src("").pipe(shell("php ../../artisan stylist:publish " + theme.name));
});

gulp.task('watch', function () {
    gulp.watch([resources.scss + '/**/*.scss'], ['public-sass']);
});


