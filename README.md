Census home
==============================

This is the home project for any Census-related projects we do. The idea is to have a collection of these projects that can be updated quickly when new data releases come out, then we can add some specific interactives to help us tell actual stories.

## Updating the projects

There is a Google spreadsheet [census-home data](https://docs.google.com/spreadsheets/d/13C56oZu-JNau-pk6W4RxjOne-BVbAlxU0sxcXeZAEBY/edit#gid=0) in the interactives@statesman.com account that has the data.

Use [Mr. Data Converter](http://shancarter.github.io/mr-data-converter/) to copy & paste the contents of that, convert to JSON - Properties, then copy/paste into the `public/data/data.json`.

## Project list

The idea is to add new projects to this README and also to the project index.

- [census-estimates-2016-city](https://github.com/statesman/census-estimates-2016-city)
- [census-estimates-2016-county](https://github.com/statesman/census-estimates-2016-county)
- [census-estimates-detail](https://github.com/statesman/census-estimates-detail)
- [census-estimates-2015](https://github.com/statesman/census-estimates-2015)
- [census-estimates-2014](https://github.com/statesman/census-estimates-2014)

There are other projects on the index, but they are not repo-based projects.

# Project development

This uses the framework for a single page project, though it could be multiple pages. Just less complex than our immersive-template setup.

## Steps when you set up a project

* Use `package.json` and run `npm install`
* You need the `.ftppass` and `.slack` files described below.
* Update the `slug` and `projectsDirectory` variables in `Gruntfile.js`.
* Update the `thumbnail` and `url` variables at the top of `index.php`.
* Run the default `grunt` task.

**NOTE:** One difference with this project compared to other single-page-projects is the inclusion of a `keep:` command in the ftppush node of the `.Gruntfile`. This ensures the projects published inside it are not blown away by this project.

### Public folder
There is a `public` folder that has the published files:
* assets: images and other accces
* dist: where js and css is compiled
* fonts: for font-awesome
* includes: files for metrics, advertising and other includes

### Src folder
The `src` folder is for components that are used by grunt tasks and copied into the `public/dist` folder:
* js: for project specific files. `main.js` will get minified into the dist folder.
* less: for less css source files, based on [bootstrap](http://getbootstrap.com/getting-started/).


## Configurations

### ftpush

The path is in `Gruntfile.js`. Add the username/password into a file called `.ftppass` as per [ftpush docs](https://www.npmjs.com/package/grunt-ftpush). Make sure that file is in the .gitignore.


```
{
  "key": {
    "username": "username",
    "password": "password"
  }
}
```

### slack msg

The `grunt-slack-hook` plugin let's us publish finished url to slack as part of ftpush. Needs a .slack file with the Webhook URL from Slack configurations. Just a single line with that url and no return.

