<?php
namespace App\Models;

use PDO;
use PDOException;

class Database {
    private static $host = "20.160.39.130";
    private static $dbname = "Projet_DW";
    private static $username = "root";
    private static $password = "Pereira0301@";
    private static $pdo = null;

    public static function getConnection() {
        if (self::$pdo === null) {
            try {
                self::$pdo = new PDO("mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8", self::$username, self::$password);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion : " . $e->getMessage());
            }
        }
        return self::$pdo;
    }
}
