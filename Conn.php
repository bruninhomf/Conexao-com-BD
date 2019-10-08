<?php

/**
 * Script de conexão
 *
 * @copyright (c) 2019, Bruno Firmiano
 */
class Conn {
    
    public static $Host = "localhost";
    public static $User = "root";
    public static $Pass = "";
    public static $Dbname = "celke";
    private static $Connect = null;
    
    private static function Conectar() {
        try {
            if(self::$Connect == null):
                self::$Connect = new PDO('mysql:host=' . self::$Host .';dbname='.self::$Dbname, self::$User, self::$Pass);
            endif;            
        } catch (Exception $ex) {
            echo 'Mensagem: ' . $ex->getMessage();
            die;
        }       
        return self::$Connect;
    }
    
    public function getConn() {
        return self::Conectar();
    }
    
}
