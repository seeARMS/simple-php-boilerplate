<?php

class CustomAutoLoader
{
	private static $BaseDirectory;


	// Add folders here to autoload
	private static $PathSpec = array(
			'Classes/%s.php',
			'Views/%s.php'
		);

	public static function AutoLoad($class)
	{
		if (!isset(self::$BaseDirectory))
			self::$BaseDirectory = dirname(__FILE__) . '/../';

		foreach (self::$PathSpec as $pathSpec)
		{
			$includeFile = self::$BaseDirectory . '/' . sprintf($pathSpec, $class);
			if (file_exists($includeFile))
			{
				require_once ($includeFile);
				return;
			}
		}
	}
}

// Register the autoloader
spl_autoload_register('CustomAutoLoader::AutoLoad');

?>
