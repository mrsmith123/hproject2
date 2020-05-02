var gulp = require("gulp");
var sass = require("gulp-sass");
var sassGlob = require("gulp-sass-glob");
var browserSync = require("browser-sync").create();
var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");
var cssvariables = require("postcss-css-variables");
var calc = require("postcss-calc");
var concat = require("gulp-concat");
var rename = require("gulp-rename");
var uglify = require("gulp-uglify");

// js file paths
var utilJsPath = "node_modules/codyhouse-framework/main/assets/js"; // util.js path - you may need to update this if including the framework as external node module
var componentsJsPath = "resources/js/components/*.js"; // component js files
var scriptsJsPath = "public/assets/js"; //folder for final scripts.js/scripts.min.js files

// css file paths
var cssFolder = "public/assets/css"; // folder for final style.css/style-custom-prop-fallbac.css files
var scssFilesPath = "resources/sass/**/*.scss"; // scss files to watch

function reload(done) {
    browserSync.reload();
    done();
}

gulp.task("sass", function() {
    return gulp
        .src(scssFilesPath)
        .pipe(sassGlob())
        .pipe(sass({ outputStyle: "compressed" }).on("error", sass.logError))
        .pipe(postcss([autoprefixer()]))
        .pipe(gulp.dest(cssFolder))
        .pipe(
            browserSync.reload({
                stream: true
            })
        )
        .pipe(rename("style-fallback.css"))
        .pipe(postcss([cssvariables(), calc()]))
        .pipe(gulp.dest(cssFolder));
});

gulp.task("scripts", function() {
    return gulp
        .src([
            "node_modules/jquery/dist/jquery.min.js",
            utilJsPath + "/util.js",
            componentsJsPath
        ])
        .pipe(concat("scripts.js"))
        .pipe(gulp.dest(scriptsJsPath))
        .pipe(
            browserSync.reload({
                stream: true
            })
        )
        .pipe(rename("scripts.min.js"))
        .pipe(uglify())
        .pipe(gulp.dest(scriptsJsPath))
        .pipe(
            browserSync.reload({
                stream: true
            })
        );
});

gulp.task(
    "browserSync",
    gulp.series(function(done) {
        browserSync.init({
            notify: false,
            proxy: "localhost:8000",
            files: [
                "app/**/*.php",
                "resources/views/**/*.php",
                "resources/views/**/*.html",
                "public/js/**/*.js",
                "public/css/**/*.css"
            ]
        });
        done();
    })
);

gulp.task(
    "watch",
    gulp.series(["browserSync", "sass", "scripts"], function() {
        gulp.watch("resources/views/**/*.php", gulp.series(reload));
        gulp.watch("resources/views/**/*.html", gulp.series(reload));
        gulp.watch("resources/sass/**/*.scss", gulp.series(["sass"]));
        gulp.watch(componentsJsPath, gulp.series(["scripts"]));
    })
);
