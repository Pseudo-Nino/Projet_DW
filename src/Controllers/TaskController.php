<?php 
namespace App\Controllers;

class TaskController extends Controller {

    public function __construct($templateEngine) {
        $this->templateEngine = $templateEngine;
    }

    // Afficher le footer
    public function showFooter()
    {
        echo $this->templateEngine->render('index.html.twig'); 
        echo"not working";
    }

}
