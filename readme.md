# SNIIC

- Author: [tmergulhao](https://github.com/tmergulhao)
- Maintainer: [Cultura Digital, Ministério da Cultura](https://github.com/CoordCulturaDigital-Minc)
- Feature deploy: [SNIIC](http://sniic.cultura.gov.br)
- Dependencies: postcss, bootstrap, bower, gulp, npm

## Deploy

After cloning this repository on a given folder under `~WP-FOLDER/wp-content/themes` it is highly recomended you have [npm](https://github.com/npm) intalled on the global binary scope.

To install you may use the [brew](https://git.io/brew-docs) command on Mac or the [apt-get](https://en.wikipedia.org/wiki/Advanced_Packaging_Tool) on Linux images.

```bash
brew install npm
```

```bash
apt-get install npm
```

The Node Package Manager — [npm](https://github.com/npm) — is gonna help you fetch, manage and compile the given dependencies for the project as well as help keep the repository and it's dependencies clean and updated at all times!

Cast `npm install --save-dev` at your terminal on the current folder. This simple command is gonna search for the Node modules in which your project has dependencies — modules difined on the `./package.json` file. For example:

```json
"dependencies": {
	"gulp": "3.9.0",
	"gulp-bower": "0.0.11",
	"gulp-rename": "1.2.2",
	"gulp-cssnano": "2.0.0",
	"gulp-postcss": "6.0.1",
	"precss": "1.3.0",
	"autoprefixer": "6.1.0",
	"cssnext": "1.8.4"
}
```

After that you will have many modules installed locally under `./node_modules` folder. You may at any given time install these modules globally but for encapsulation purpuses it is chosen to have only the main command — [npm](https://github.com/npm) — on the global scope.

After that it is important to run the compiling and fetching of HTML, CSS and JS non-structural external assets. Run `./node_modules/bin/gulp` and trigger the default [gulp](https://github.com/gulpjs) building procedure.

The default procedure is set on `./gulpfile.js`. It is a Javascript procedure for piping all styles and code as fast and clean as possible.

```javascript
gulp.task('default', ['stylesheets', 'bower']);

gulp.task('watch', function() {
  gulp.watch(['*.pcss', 'stylesheets/*.pcss'], ['stylesheets']);
});
```

These procedures define two ways of developing. For testing and server-side compiling purposes use `./node_modules/.bin/gulp` in case of continuous local development it is recommended `./node_modules/.bin/gulp watch`.

### Liners

For local development:

```bash
git clone https://github.com/CoordCulturaDigital-Minc/Novo-SNIIC.git && npm install && ./node_modules/.bin/gulp
```

```bash
./node_modules/.bin/gulp watch
```

Server-side continuous deploy

```bash
git clone https://github.com/CoordCulturaDigital-Minc/Novo-SNIIC.git && npm install && ./node_modules/.bin/gulp
```

```bash
./node_modules/.bin/gulp
```
