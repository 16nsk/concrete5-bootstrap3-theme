# Bootstrap 3 Theme for Concrete5 

_Far from perfect or finished but a good starting point_
### Includes
-   Bootstrap 3
-   FontAwesome
-   Grunt with CoffeeScipt, jshint, less, uglify, watch
-   [Bootstrap Carousel] by Oliver Green

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

## Watch tasks

### LiveReload

In elements/footer.php change the line containing

`<script src="http://localhost.nl:35722/livereload.js"></script>`

to your own needs

### less
less files are 

-   css/less/project.less
-   css/less/stuff.less
-   css/less/variables.less

### css 

css/project.css get updated automaticly by grunt everytime you save any of the above less files

project.less overwrites bootstraps variables.less from the build/bower_components/bootstrap/less/ dir and creates project.css containing bootstraps css and your own styles from project.less and or stuff.less


### CoffeeScript

grunt watches all coffee files in

-   js/coffee/

for errors

these compile to js/build/
all js in js/build/ gets minified to js/min/ with source maps

### phplint

grunt watches all php files in

-   ./
-   ./elements

for errors


License
----
MIT


[Bootstrap Carousel]:https://github.com/olsgreen/concrete5-bootstrap-carousel
