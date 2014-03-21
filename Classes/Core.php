<?php

class Core {

	// protected $baseView;

	public function __construct($login = false) {
		// Find the absolute base path and store it in a constant

		// Start or resume the session
		session_start();

		// Register the custom class autoloader
		require_once (dirname(__FILE__) . '/CustomAutoLoader.php');
	}

	public function renderView($tmplFile, array $params = null, $tmplLocation = null) {

		// Instantiate a temporary view
		$view = new Template($tmplLocation);

		// Include the header view
		$view->render('header.tmpl');

		// If data is passed as an argument,
		// loop through it, providing it to the view
		if ($params !== null) {
			foreach ($params as $key => $value) {
				$view->$key = $value;
			}
		}

		// Render the contents of the the template file
		$view->render($tmplFile);

		// Render the footer
		$view->render('footer.tmpl');

		// Return the Template file object
		return $view;
	}

}

?>