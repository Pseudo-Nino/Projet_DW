<?php
/**
 * This is the router, the main entry point of the application.
 * It handles the routing and dispatches requests to the appropriate controller methods.
 */

require "vendor/autoload.php";

use App\Controllers\Page_Accueil;
use App\Controllers\Inscription;
use App\Controllers\Connexion;
use App\Controllers\OffreEmploi;
use App\Controllers\AvisEntreprise;
use App\Controllers\VoirOffre1;
use App\Controllers\VoirOffre2;

// Charger Twig
$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    'debug' => true, 
    'cache' => false
]);

// Récupérer la page demandée
$page = isset($_GET['page']) ? $_GET['page'] : 'accueil';

// Logique de routage
switch ($page) {
    case 'inscription':
        $controller = new Inscription($twig);
        $controller->showIncription();
        break;

    case 'connexion':
        $controller = new Connexion($twig);
        $controller->showConnexion();
        break;

    case 'offre_emploi':
        $controller = new OffreEmploi($twig);
        echo $controller->showOffreEmploi();
        break;

    case 'avis_entreprise':
        $controller = new AvisEntreprise($twig);
        echo $controller->showEntreprise();
        break;

    case 'accueil':
    default:
        $controller = new Page_Accueil($twig);
        $controller->showFooter();
        break;

    case 'voiroffre1':
        $controller = new VoirOffre1($twig);
        echo $controller->showOffre1();
        break;

    case 'voiroffre2':
        $controller = new voiroffre2($twig);
        echo $controller->showOffre2();
        break;
    
}
