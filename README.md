# WordPress Gulp Boilerplate

This is a repo for streamlining WordPress Theme development.

## Setup

* Clone this repo and pull WordPress submodule `git submodule update --init --recursive`
* Install [npm](https://nodejs.org/).
* Run `npm install` to get all dependecies.
* Edit `wp-config.php` to configure your `$table_prefix`.
* Create `config-local.php` file basing on `config-sample.php` and fill it with your local database configuration.
* Run `gulp build` to build your local environment folder.

## Files structure

This starter kit uses `src`, `build`, and `dist` folders, which you can find in `content` folder, to organize theme development.

* `src` is the srouce of your development. The structure looks like in WordPress `wp-content` folder.
* `build` folder is generated running `gulp build`. When developing in the `local` environment, WordPress grabs all the content from here.
* `dist` folder is generated running `gulp dist`. When you push your site to `staging` or `production` environment, WordPress grabs the content from here.

## To Do

Some ideas will be borrowed from [gulp-starter](https://github.com/vigetlabs/gulp-starter)

* Theme
	* Setting up a basic theme with:
		* All the necessary files according to WordPress Standards
		* `get_component()` function
		* `ACF` plugin
	* Adding a `Child Theme`
* Styles
	* Linting
	* Compiling `SASS`
	* Autoprefixing
	* Supporting newer/future `CSS`
	* Minifying
* JavaScript
	* Linting
	* Compiling `ES6`
	* Minifying
* Images
	* Compressing
* Icons
	* Auto-generating Icon Fonts from `SVG` Icons
* BrowserSync / LiveReload
	* Enabling BrowserSync / LiveReload
* Deployment
	* Setting up deployment procedure
* Bower
	* Supporting Bower
* README
	* Preparing setup / usage manual
	* Writing standards manual for writing `CSS`, `JavaScript` and a modular `PHP` code
