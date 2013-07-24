<?php
spl_autoload_register(function($class) {
	@include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR."${class}.php");
	@include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR."${class}.php");
	@include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR."${class}.php");
});
