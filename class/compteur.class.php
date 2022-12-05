<?php
class Compteur EXTENDS Projet{
    private $id_cpt;
    private $numero_cpt;
    private $code_cpt;
    private $id_cns;
    private $id_fns;

    public function __construct($id = null)
    {
        parent::__construct();

        if($id){
            $this->set_id_cpt($id);
            $this->init();
        }
    }

    public function init(){
        try {
            $query = "SELECT * FROM t_compteurs WHERE id_cpt=:id_cpt";
            $stmt = $this->pdo->prepare($query);
            $args = array();

            $args[':id_cpt'] = $this->get_id_cpt();

            $stmt->execute($args);

            $tab = $stmt->fetch();
            $this->set_numero_cpt($tab['numero_cpt']);
            $this->set_code_cpt($tab['code_cpt']);
            $this->set_id_cns($tab['id_cns']);
            $this->set_id_fns($tab['id_fns']);
            return true;
        }catch (
        Exception $e
        ) {
            return false;
        }
    }

    public function get_all(){
        try{
            $query = "SELECT * FROM t_compteur";

            $stmt = $this->pdo->prepare($query);
            $stmt->execute();

            return $stmt->fetchAll();

        }catch (Exception $e){
            echo 'Exception reçue : ' . $e->getMessage(), "\n";
            return false;
        }
    }

    /**
     * @return mixed
     */
    public function get_id_cpt()
    {
        return $this->id_cpt;
    }

    /**
     * @param mixed $id_cpt
     */
    public function set_id_cpt($id_cpt)
    {
        $this->id_cpt = $id_cpt;
    }

    /**
     * @return mixed
     */
    public function get_numero_cpt()
    {
        return $this->numero_cpt;
    }

    /**
     * @param mixed $numero_cpt
     */
    public function set_numero_cpt($numero_cpt)
    {
        $this->numero_cpt = $numero_cpt;
    }

    /**
     * @return mixed
     */
    public function get_code_cpt()
    {
        return $this->code_cpt;
    }

    /**
     * @param mixed $code_cpt
     */
    public function set_code_cpt($code_cpt)
    {
        $this->code_cpt = $code_cpt;
    }

    /**
     * @return mixed
     */
    public function get_id_cns()
    {
        return $this->id_cns;
    }

    /**
     * @param mixed $id_cns
     */
    public function set_id_cns($id_cns)
    {
        $this->id_cns = $id_cns;
    }

    /**
     * @return mixed
     */
    public function get_id_fns()
    {
        return $this->id_fns;
    }

    /**
     * @param mixed $id_fns
     */
    public function set_id_fns($id_fns)
    {
        $this->id_fns = $id_fns;
    }



}
?>