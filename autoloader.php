<?php

// Ensures code from the following files is loaded.
spl_autoload_register(function($className) {
	include_once 'src/' . $className . '.php';
});
