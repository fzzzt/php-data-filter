<?php
require_once('Process.php');

class StandardOutDestination implements Process {
	public function process($data) {
		echo $data;
	}
}
