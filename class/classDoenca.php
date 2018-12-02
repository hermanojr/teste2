<?php

require_once 'classCrud.php';

class Doenca extends Crud {
    
    protected $id;
    protected $nome;
    protected $cid;
    protected $grauRisco;
    protected $areaMedica;
    protected $dataInsercao;
    protected $descricao;
    protected $tratamento;
    protected $causa;
    protected $tempoTratamento;
    protected $medicamento;
    protected $table = "doenca";
    
    public function __construct(PDO $db) {
        parent::__construct($db);
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCid() {
        return $this->cid;
    }

    function getGrauRisco() {
        return $this->grauRisco;
    }

    function getAreaMedica() {
        return $this->areaMedica;
    }

    function getDataInsercao() {
        return $this->dataInsercao;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getTratamento() {
        return $this->tratamento;
    }

    function getCausa() {
        return $this->causa;
    }

    function getTempoTratamento() {
        return $this->tempoTratamento;
    }

    function getMedicamento() {
        return $this->medicamento;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCid($cid) {
        $this->cid = $cid;
    }

    function setGrauRisco($grauRisco) {
        $this->grauRisco = $grauRisco;
    }

    function setAreaMedica($areaMedica) {
        $this->areaMedica = $areaMedica;
    }

    function setDataInsercao($dataInsercao) {
        $this->dataInsercao = $dataInsercao;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setTratamento($tratamento) {
        $this->tratamento = $tratamento;
    }

    function setCausa($causa) {
        $this->causa = $causa;
    }

    function setTempoTratamento($tempoTratamento) {
        $this->tempoTratamento = $tempoTratamento;
    }

    function setMedicamento($medicamento) {
        $this->medicamento = $medicamento;
    }

    
    public function insert() {
        $stmt = $this->db->prepare("insert into $this->table(nome, cid, grauRisco, areaMedica, dataInsercao, descricao, tratamento, causa, tempoTratamento, medicamento) values(:nome, :cid, :grauRisco, :areaMedica, :dataInsercao, :descricao, :tratamento, :causa, :tempoTratamento, :medicamento)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":cid", $this->cid);
        $stmt->bindParam(":grauRisco", $this->grauRisco);
        $stmt->bindParam(":areaMedica", $this->areaMedica);
        $stmt->bindParam(":dataInsercao", $this->dataInsercao);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":tratamento", $this->tratamento);
        $stmt->bindParam(":causa", $this->causa);
        $stmt->bindParam(":tempoTratamento", $this->tempoTratamento);
        $stmt->bindParam(":medicamento", $this->medicamento);
        $stmt->execute();
    }
    
    public function update() {
        $stmt = $this->db->prepare("update $this->table set nome = :nome, cid = :cid, grauRisco = :grauRisco, areaMedica = :areaMedica, dataInsercao = :dataInsercao, descricao = :descricao, tratamento = :tratamento, causa = :causa, tempoTratamento = :tempoTratamento, medicamento = :medicamento where $this->table.id=:id");
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":cid", $this->cid);
        $stmt->bindParam(":grauRisco", $this->grauRisco);
        $stmt->bindParam(":areaMedica", $this->areaMedica);
        $stmt->bindParam(":dataInsercao", $this->dataInsercao);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":tratamento", $this->tratamento);
        $stmt->bindParam(":causa", $this->causa);
        $stmt->bindParam(":tempoTratamento", $this->tempoTratamento);
        $stmt->bindParam(":medicamento", $this->medicamento);
        $stmt->execute();
    }
}//Fecha classe Doenca

