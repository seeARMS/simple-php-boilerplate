simple-php-boilerplate
======================

Simple PHP Boilerplate is a set of tools allowing you to get a quickstart on developing your simple PHP application.
For small applications, the use of a fully-fledged framework is overkill.   
Simple PHP Boilerplate includes a templating engine, a custom class autoloader, and a 'core' class, easily allowing you to provide authentication, session management, or anything else you need on every request.

Installation
------------

Simply copy the index.php and the Classes & Views folder to your document root. Navigate to your website and you should see "Hello World" text.

Usage
-----

Simple PHP Boilerplate loosely follows a classic MVC architecture. The views and models are in the Views and Classes folder respectively, and the controllers are the files located in the document root.

For any webpage, you should first create a controller in the document root corresponding to the URL. All your controllers should all follow the same structure as the provided example index.php:
   
- Require and instantiate the core class, which provides any libraries or functionality you need on every request (ie authentication)
- Retrieve any data from your models / API
- Pass your data to the view then render it

By default, when the Core->renderView() class is called, your view is rendered in between header.tmpl and footer.tmpl
files.

In order to access variables that you passed from your controller to your view, you can simply echo it as follows:

- If PHP short tags are enabled: ``` <?= $this->content ?> ```
- Otherwise: ``` <?php echo $this->content ?> ```    