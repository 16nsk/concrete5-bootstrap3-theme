# Bootstrap 3 Theme for Concrete5 

_Far from perfect or finished but a good starting point_
### Includes
-   Bootstrap 3
-	FontAwesome
-	Grunt with jshint, less, uglify, watch

## Usage
Install with node and bower from build dir
```shell
npm install
bower install
```

Use grunt to watch changes in less, js and php files and reload with LiveReload
```shell
grunt watch
```

## LiveReload

In elements/footer.php change the line containing

`<script src="http://localhost.nl:35729/livereload.js"></script>`

to your own needs

## less
less files are 

-   css/less/project.less
-   css/less/stuff.less
-   css/less/variables.less

## css 

css/project.css get updated automaticly by grunt everytime you save any of the above less files

project.less overwrites bootstraps variables.less from the build/bower_components/bootstrap/less/ dir and creates project.css containing bootstraps css and your own styles from project.less and or stuff.less


## jshint

grunt watches all js files in

-   js/build/

for errors

these are included in the elements/footer.php, for minified production js see below

## uglify

to minify all js in js/build/ to js/min/ run:

```shell
grunt uglify
```

you can use these minified .js files for production