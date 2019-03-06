<?php



use Projet\App\Controller;

class ErrorController extends Controller
{
    /**
     * @param $error
     */
    public function run($error){
        $this->renderView('error',[
            'error' => $error,
        ]);
    }
}