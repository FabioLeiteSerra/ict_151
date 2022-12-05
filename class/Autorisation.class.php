<?php
Class Autorisation EXTENDS Projet {

    private $id_aut;
    private $nom;
    private $code;
    private $desc;

    public function __construct($id = null){

        parent::__construct();

        if($id){
            $this->set_id_aut($id);
            $this->init();
        }
    }

    public function check_code($abr)
    {
        try {
            $query = "SELECT * from t_autorisations WHERE code_aut = :code LIMIT 1";
            $stat = $this->pdo->prepare($query);
            $args = array();
            $args[':code'] = $abr;
            $stat->execute($args);
            $tab = $stat->fetch();
            if ($stat->rowCount()) {
                return false;
            } else {
                return true;
            }
        } catch (Exception $e) {
            return false;
        }
    }

    public function add($tab){

        $args = array();
        $args['nom_aut'] = $tab['nom_aut'];
        $args['code_aut'] = $tab['code_aut'];
        $args['desc_aut'] = $tab['desc_aut'];

        try{
            $query = "INSERT INTO t_autorisations SET 
                nom_aut = :nom_aut,
                code_aut = :code_aut,
                desc_aut = :desc_aut";

            $stmt = $this->pdo->prepare($query);
            $stmt->execute($args);

            return $this->pdo->lastInsertId();

        }catch (Exception $e){
            //echo 'Exception reçue : ' . $e->getMessage(), "\n";
            return false;
        }
    }

    public function __toString(){
        $str = "\n<pre>\n";
        foreach($this AS $key => $val){
            if($key != "pdo"){
                $str .= "\t".$key;
                for($i=strlen($key);$i<20;$i++){
                    $str .= "&nbsp;";
                }
                $str .= "&nbsp;&nbsp;&nbsp;".$val."\n";
            }
        }
        $str .= "\n</pre>";
        return $str;
    }

    /**
     * @return mixed
     */
    public function get_id_aut()
    {
        return $this->id_aut;
    }

    /**
     * @param mixed $id_aut
     */
    public function set_id_aut($id_aut)
    {
        $this->id_aut = $id_aut;
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
    public function get_code()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function set_code($code)
    {
        $this->code = $code;
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