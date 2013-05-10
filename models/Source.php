<?php

class Source {
	private $db;
	private $process;
	
	private $i = 0;
	private $data = Array(
		Array('first' => '1st'),
		Array('second' => '2nd'),
		Array('third' => '3rd'),
	);

	public function get_record() {
		$record = $this->i < 3 ? $this->data[$this->i] : NULL;
		$this->i++;
		return $record;
	}
}
