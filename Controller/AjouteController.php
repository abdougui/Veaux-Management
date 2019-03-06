<?php


use Projet\App\Controller;

class AjouteController extends Controller
{	
	public function __construct($request){
		$this->layout='ajoute';
		$this->request = $request;
		//var_dump($request);
		if(!empty($request->data)){
			$this->loadModel("User");
			$this->addUser();
		}else{
			$this->renderView();
		}
	}
	public function addUser(){
		if($this->validate()){
			$this->User->save("insert into users values(null,'".$this->request->data->username."','".$this->request->data->password."');");
			$this->set($this->request->data->username,'Added With success');
			$_POST=null;
			$this->renderView();
		}else{
			$this->renderView();
		}
	}
	public function validate()
	{
		$valide=true;
		if(empty(trim($this->request->data->username))){
			$this->set('username','est obligatoire');
			$valide=false;
		}else if(empty($this->request->data->password)){
			$this->set('password','est obligatoire');
			$valide=false;
		}
		return $valide;
	}

}
