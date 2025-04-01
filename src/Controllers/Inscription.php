<?php 
namespace App\Controllers;

class Inscription extends Controller {

    public function __construct($templateEngine) {
        $this->templateEngine = $templateEngine;
    }

    public function showIncription()
    {
        echo $this->templateEngine->render('Inscription.html.twig'); 
        echo"not working";
    }

}