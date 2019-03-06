<?php


use Projet\App\Controller;

class ContactController extends Controller
{	
	public function __construct($request){
		$this->request=$request;
		$this->layout=$request->controller;
		$this->renderView();
	}

   /* public function run($request){
        $this->renderView();
    }*/

}
