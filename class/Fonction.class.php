<?php
Class Fonction EXTENDS Projet{

    private $id_fnc;
    private $nom;
    private $abr;
    private $desc;

    public function __construct($id = null){

        parent::__construct();

        if($id){
            $this->set_id_fnc($id);
            $this->init();
        }
    }

    public function check_abr($abr)
    {
        try {
            $query = "SELECT * from t_fonctions WHERE abr_fnc = :abr LIMIT 1";
            $stat = $this->pdo->prepare($query);
            $args = array();
            $args[':abr'] = $abr;
            $stat->execute($args);
            $tab = $stat->fetch();
            if ($stat->rowCount()) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function add($tab){

        $args = array();
        $args['nom_fnc'] = $tab['nom_fnc'];
        $args['abr_fnc'] = $tab['abr_fnc'];
        $args['desc_fnc'] = $tab['desc_fnc'];

        try{
            $query = "INSERT INTO t_personnes SET 
                nom_fnc = :nom_fnc,
                abr_fnc = :abr_fnc,
                desc_fnc = :desc_fnc";

            $stmt = $this->pdo->prepare($query);
            $stmt->execute($args);

            return $this->pdo->lastInsertId();

        }catch (Exception $e){
            //echo 'Exception reçue : ' . $e->getMessage(), "\n";
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function get_id_fnc()
    {
        return $this->id_fnc;
    }

    /**
     * @param mixed $id_fnc
     */
    public function set_id_fnc($id_fnc)
    {
        $this->id_fnc = $id_fnc;
    }

    /**
     * @return mixed
     */
    public function get_nom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function set_nom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function get_abr()
    {
        return $this->abr;
    }

    /**
     * @param mixed $abr
     */
    public function set_abr($abr)
    {
        $this->abr = $abr;
    }

    /**
     * @return mixed
     */
    public function get_desc()
    {
        return $this->desc;
    }

    /**
     * @param mixed $desc
     */
    public function set_desc($desc)
    {
        $this->desc = $desc;
    }



}
