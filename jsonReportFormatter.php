<?php
class JsonReportFormatter 
{
	public $result;
	
	public function __construct($result){
		$this->result = $result;
	}

    public function resultCalculator(){
        echo json_encode($this->result);	
    }   
}
