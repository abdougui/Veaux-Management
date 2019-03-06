<?php


use Projet\App\Controller;

class HomeController extends Controller
{
    public function run(){
        $this->renderView('home',[]);
    }
}
