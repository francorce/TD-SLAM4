<?php
class Conf{
    static private $databases = array(
        // ou localhost sur votre machine
        'hostname'=>'localhost:3306',
        // A l'IUT, vous avez une BDD nommee comme votre login
        // Sur votre machine, vous devrez creer une BDD
        'database'=>'td2php',
        // A l'IUT, c'est votre login
        // Sur votre machine, vous avez surement un compte 'root'
        'login' => 'root',
        // A l'IUT, c'est votre mdp (INE par defaut)
        // Sur votre machine personelle, vous avez creez ce mdp a l'installation
        'password' => '');       
    
    static public function getLogin() {
        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        // echo 'Login : ';        
        return self::$databases['login'];
    }
    static public function getHostname() {
        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        // echo 'Hôte : ';
        return self::$databases['hostname'];
    }
    static public function getDatabase() {
        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        // echo 'Base de donnée : ';
        return self::$databases['database'];
    }
    static public function getPassword() {
        //en PHP l'indice d'un tableau n'est pas forcement un chiffre.
        // echo 'Mot de Passe : ';
        return self::$databases['password'];
    }
}
?>