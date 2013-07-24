<?php
class Record_Controller extends BaseController {
	private $filters = Array();
	private $source = NULL;
	
	public function service($name, Array $parameters) {
		$view = new EmptyView();
		
		switch ($name) {
			case 'add_filter':
				$this->filters[] = $parameters['filter'];
				break;
			case 'run':
				while (($record = $this->source->get_record()) != NULL) {
					echo("Record:");
					echo($record);
					foreach ($this->filters as $filter) {
						$filter->process($record);
					}
				}
				break;
			case 'set_source':
				$this->source = $parameters['source'];
				break;
		}
		
		return $view;
	}
}
