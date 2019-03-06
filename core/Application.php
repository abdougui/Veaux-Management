<?php 
namespace Projet\App;
class Application
{
    public function run (){
        /*load autoloader*/
        //require('Autoloader.php');
        //\Projet\App\Autoloader::register();

        /*load Configuration*/
        //require ('Router.php');

        /*routeRequest*/

        new \Dispatcher();
        //$request=new Request();
        //$router = new Router();
       // $router->routeRequest($request->url);
    }
}
