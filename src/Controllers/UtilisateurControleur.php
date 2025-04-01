<?php
require_once 'models/UtilisateurModel.php';

class UtilisateurController {
    private $utilisateurModel;

    public function __construct() {
        $this->utilisateurModel = new UtilisateurModel();
    }

    public function inscription($email, $motDePasse) {
        if ($this->utilisateurModel->getUtilisateurByEmail($email)) {
            return "Email déjà utilisé";
        }
        $this->utilisateurModel->ajouterUtilisateur($email, $motDePasse);
        return "Inscription réussie";
    }
}
?>
