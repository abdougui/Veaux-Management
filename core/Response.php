<?php
namespace Projet\App;
use stdClass;

class Response{
    public $layout = 'error';
    public $data;
	public function __construct($data){
		foreach ($data as $key => $value) {
			if($key='layout') $this->layout=$key;
		}
		$this->data($key=$data);
	}

}