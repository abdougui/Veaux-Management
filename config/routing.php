<?php
/*
 *  Routes Configuration
 */

/*Compatible only with php 7 or higher*/
define('ROUTES', [
    /**
     * To add a route, follow this example :
     * '{Name on the action}' => ['Controller' => '{controller name}','Action' => ' method of controller to call'],
     */
    'home' => ['Controller' => 'HomeController','Action' => 'run'],
    'Home' => ['Controller' => 'HomeController','Action' => 'run'],
    'list' => ['Controller' => 'ListController','Action' => 'getList'],
    'addlist' => ['Controller' => 'ListController','Action' => 'addList'],
    'contact' => ['Controller' => 'ContactController','Action' => 'run'],
]);
