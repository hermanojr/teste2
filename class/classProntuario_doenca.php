<?php

require_once 'class/classCrud.php';

class Prontuario extends Crud {
    
    private $idD;
    private $idPr;
    protected $table = "prontuario_has_doenca";
    
    public function __construct(PDO $db) {
        parent::__construct($db);
    }
    
    function getIdD() {
        return $this->idD;
    }

    function getIdPr() {
        return $this->idPr;
    }

    function setIdD($idD) {
        $this->idD = $idD;
    }

    function setIdPr($idPr) {
        $this->idPr = $idPr;
    }
    
    public function insert() {
        $stmt = $this->db->prepare("insert into $this->table(Prontuario_id, Doenca_id) values(:Prontuario_id, :Doenca_id)");
        $stmt->bindParam(":Prontuario_id", $this->idPr);
        $stmt->bindParam(":Doenca_id", $this->idD);
        $stmt->execute();        
    }   

}//fecha classe Prontuario

