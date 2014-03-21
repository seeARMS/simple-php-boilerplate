<?php

require_once (dirname(__FILE__) . '/Classes/Core.php');

// Load the core class
$core = new Core();

// Here is any data you want displayed,
// typically retrieved from your API
$data = array(
	'title' => 'Hello World!',
	'content' => 'This text is getting rendered on your index.tmpl view, through the index.php controller in your web root.'
	);

$homeView = $core->renderView('index.tmpl', $data);

?>
