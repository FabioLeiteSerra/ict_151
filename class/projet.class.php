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

    public function init(){
        try {
            $query = "SELECT * FROM t_personnes WHERE id_per=:id_per";
            $stmt = $this->pdo->prepare($query);
            $args = array();

            $args[':id_per'] = $this->get_id();

            $stmt->execute($args);

            $tab = $stmt->fetch();
            $this->set_nom($tab['nom_per']);
            $this->set_prenom($tab['prenom_per']);
            $this->set_email($tab['email_per']);
            $this->set_password($tab['password_per']);
            $this->set_news_letter($tab['news_letter_per']);
            return true;
        }catch (
        Exception $e
        ) {
            return false;
        }
    }
}

