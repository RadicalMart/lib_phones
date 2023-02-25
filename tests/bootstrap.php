<?php

ini_set('memory_limit', '1024M');

$autoload = dirname(__FILE__, 2) . '/vendor/autoload.php';

if (file_exists($autoload)) {
	require $autoload;
} else {
	throw new RuntimeException(
		sprintf(
			'Could not find file \'%s\'. It is generated by Composer. Use \'install --prefer-source\' or \'update --prefer-source\' Composer commands to move forward.',
			$autoload
		)
	);
}
