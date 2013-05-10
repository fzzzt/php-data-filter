<?php

require_once(dirname(__FILE__).DIRECTORY_SEPARATOR.implode(DIRECTORY_SEPARATOR,Array('','externals','php-mvc','autoload.php')));

spl_autoload_register(function($class) {
	@include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR."${class}.php");
	@include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR."${class}.php");
	@include_once(dirname(__FILE__).DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR."${class}.php");
});

$controller = new Record_Controller();

$controller->service('set_source', Array('source' => new Source()));
$controller->service('add_filter', Array('filter' => new Identity_Filter()));
$controller->service('add_filter', Array('filter' => new Console_Destination()));
$controller->service('run', Array());
