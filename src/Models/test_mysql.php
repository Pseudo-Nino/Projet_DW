<?php 
// Définir les informations de connexion 
$host = '20.160.39.130'; // hôte de la base de données 
$dbname = 'Projet_DW'; // nom de la base de données 
$username = 'carole'; // votre nom d'utilisateur MySQL 
$password = 'Cocorico17@'; // votre mot de passe MySQL 

try { 
    // Création de la connexion PDO 
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); 
    // Définir le mode d'erreur de PDO à Exception 
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    // Message si la connexion est réussie 
    echo "Connexion réussie à la base de données."; 
    } catch (PDOException $e) { 
    // Message en cas d'erreur 
    echo "Échec de la connexion : " . $e->getMessage(); 
    } 
    ?>