<?php
namespace Projet\App;
use stdClass;

class Request{
	public $url ;
    public $page = 1 ;
	public $prefix = false ;
    public $data = false;
    public $controller ='';
    public $action='';
	public function __construct(){
		$this->url=explode( '/', filter_var(rtrim($_SERVER['REQUEST_URI'], '/'), FILTER_SANITIZE_URL));
		$base=array_slice($this->url, 2);

		if(sizeof($base)==0) $this->controller='home';
		if(sizeof($base)>=1) $this->controller=strtolower($base[0]);
		if(sizeof($base)==2) $this->action=strtolower($base[1]);
		if(sizeof($base)==3) $this->prefix=strtolower($base[2]);
		//var_dump($this->url);
		 if(!empty($_POST)){
            $this->data =new stdClass();
            foreach($_POST as $k=>$v){
              $this->data->$k = $v ;
            }
        }
	}
}