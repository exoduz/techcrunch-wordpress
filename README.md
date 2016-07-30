# TechCrunch coding challenge #

## Problem ##
Use Wordpress and a frontend JS library of your choice (`Angular`, `Backbone`, `React`...) to load Wordpress posts on the homepage. The displayed posts will be only from the category "techcrunch".

The request to the DB needs to be cached. The front end library will query the backend on page load, retrieve the posts and display them nicely on the homepage. (you can use [WP REST plugin](http://v2.wp-api.org/))

You can use a Wordpress theme, and you are welcome to use `SASS` (or any `CSS` preprocessor), and `Bootstrap` but it's not mandatory. Make it nice visually but keep the design very simple.

## Installation ##
This is just a standard WordPress install. All the coding is in the theme.

To make it run with the API please change line 27072 in `path/to/theme/js/app.js` to the URL of the actual WordPress install e.g. http://mysite.com/techcrunch. The slug techcrunch is required as this is where the JSON payload is being created.

## Demo ##
[https://robinjulius.com/work/techcrunch](https://robinjulius.com/work/techcrunch)

## TODO ##
- Using something like dotenv to declare variables to be used within the React components (this applies mostly to the URL of the API)
- Loading screen when Ajax call initiated for posts.
- Date formatting on posts.
- Post categories (currently multiple category retrieval not supported by WP REST API v2... yet).

## Assumptions ##
- Data used is dummy data.
- Just the posts, no sidebar, etc.
- No pagination.
- No need for individual post page to be created.
- Once built, it should work as a theme but won't have access to global functions or hooks in WordPress.
- The Javascript code is not production, so it is not uglified. This is for readability for the coding assessment.

## Used ##
- [ReactJS](https://facebook.github.io/react/)
- [Webpack](https://webpack.github.io/)
- [Bootstrap](http://getbootstrap.com/)
- [Font Awesome](http://fontawesome.io/)
- [React router](https://github.com/reactjs/react-router)