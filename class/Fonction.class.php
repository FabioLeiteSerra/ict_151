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

    public function init()
    {
        try {
            $query = "SELECT * FROM t_fonctions WHERE id_fnc= :id_fnc";
            $stmt = $this->pdo->prepare($query);
            $args = array();
            $args[':id_fnc'] = $this->get_id_fnc();
            $stmt->execute($args);
            $tab = $stmt->fetch();
            $this->set_nom($tab['nom_fnc']);
            $this->set_abr($tab['abr_fnc']);
            $this->set_desc($tab['desc_fnc']);
            return true;
        } catch (Exception $e) {
            return false;
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

//    public function get_tab_per_all_fnc(){
//        try{
//            $query = "SELECT * FROM t_fnc_per ORDER BY id_fnc";
//            $stmt = $this->pdo->prepare($query);
//            if($stmt->execute()){
//                $tab = $stmt->fetchall();
//                $tab_fnc_per = array();
//                foreach ($tab as $row){
//                    $tab_fnc_per[$row['id_fnc']][] = $row['id_per'];
//                }
//                return $tab_fnc_per;
//            }else{
//                return false;
//            }
//
//        }catch (Exception $e){
//            //echo 'Exception reçue : ' . $e->getMessage(), "\n";
//            return false;
//        }
//}

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

    public function get_all($order = "nom_fnc"){
        try{
            $query = "SELECT * FROM t_fonctions ORDER BY " . $order;

            $stmt = $this->pdo->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll();

        }catch (Exception $e){
            echo 'Exception reçue : ' . $e->getMessage(), "\n";
            return false;
        }
    }

    public function get_tab_per_all_fnc(){
        try{
            $query = "SELECT * FROM t_fnc_per ORDER BY id_fnc";
            $stmt = $this->pdo->prepare($query);
            if($stmt->execute()) {
                $tab = $stmt->fetchAll();
                $tab_fnc_per = array();
                foreach ($tab as $row) {
                    $tab_fnc_per[$row['id_fnc']][] = $row['id_per'];
                }
                return $tab_fnc_per;
            }else{
                return false;
            }
        }catch(Exception $e){
            // echo 'Exception reçue : ', $e->getMessage(), "\n";
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
