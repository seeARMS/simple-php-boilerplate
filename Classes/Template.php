<?php

class Template {

	protected $template_dir;
	protected $vars = array();

	public function __construct($template_dir = null) {

		// Set the template directory to a default
		$this->template_dir = dirname(__FILE__) . '/../Views/';

		// If the template directory is changed through the constructor,
		// set the member variable to it
		if ($template_dir !== null) {
			$this->template_dir = $template_dir;
		}

	}

	public function render($template_file) {

		if (file_exists($this->template_dir.$template_file))
			include $this->template_dir.$template_file;
		else
			throw new Exception('No template file: ' . $template_file . ' is located in the directory: ' . $this->template_dir);
		
	}

	public function __set($name, $value) {
		$this->vars[$name] = $value;
	}

	public function __get($name) {
		return @$this->vars[$name];
	}

}

?>