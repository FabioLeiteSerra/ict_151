<?php
class Projet{
    protected $pdo;

    public function __construct(){
        $this->pdo = new PDO('mysql:dbname='. BASE_NAME. ';
                                    host='.SQL_HOST,
            SQL_USER,
            SQL_PASSWORD,
            array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            )
        );
    }
}

