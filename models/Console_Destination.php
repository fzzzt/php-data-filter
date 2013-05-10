<?php

class Console_Destination implements Process {
	public function process(&$data) {
		echo str_replace("\n",'',print_r($data,TRUE))."\n";
	}
}