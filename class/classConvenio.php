<?php

require_once 'classCrud.php';

class Convenio extends Crud {
    
    protected $id;
    protected $nome;
    protected $contrato;
    protected $inicio;
    protected $validade;
    protected $contato;
    protected $fone;
    protected $email;
    protected $avaliacao;
    protected $obs;
    protected $table = "convenio";
    
    public function __construct(PDO $db) {
        parent::__construct($db);
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getContrato() {
        return $this->contrato;
    }

    function getInicio() {
        return $this->inicio;
    }

    function getValidade() {
        return $this->validade;
    }

    function getContato() {
        return $this->contato;
    }

    function getFone() {
        return $this->fone;
    }

    function getEmail() {
        return $this->email;
    }

    function getAvaliacao() {
        return $this->avaliacao;
    }

    function getObs() {
        return $this->obs;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setContrato($contrato) {
        $this->contrato = $contrato;
    }

    function setInicio($inicio) {
        $this->inicio = $inicio;
    }

    function setValidade($validade) {
        $this->validade = $validade;
    }

    function setContato($contato) {
        $this->contato = $contato;
    }

    function setFone($fone) {
        $this->fone = $fone;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setAvaliacao($avaliacao) {
        $this->avaliacao = $avaliacao;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }

    
    public function insert() {
        $stmt = $this->db->prepare("insert into $this->table(nome, contrato, inicio, validade, contato, fone, email, avaliacao, obs) values(:nome, :contrato, :inicio, :validade, :contato, :fone, :email, :avaliacao, :obs)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":contrato", $this->contrato);
        $stmt->bindParam(":inicio", $this->inicio);
        $stmt->bindParam(":validade", $this->validade);
        $stmt->bindParam(":contato", $this->contato);
        $stmt->bindParam(":fone", $this->fone);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":avaliacao", $this->avaliacao);
        $stmt->bindParam(":obs", $this->obs);
        $stmt->execute();
    }
    
    public function update() {
        $stmt = $this->db->prepare("update $this->table set nome = :nome, contrato = :contrato, inicio = :inicio, validade = :validade, contato = :contato, fone = :fone, email = :email, avaliacao = :avaliacao, obs = :obs where $this->table.id=:id");
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":contrato", $this->contrato);
        $stmt->bindParam(":inicio", $this->inicio);
        $stmt->bindParam(":validade", $this->validade);
        $stmt->bindParam(":contato", $this->contato);
        $stmt->bindParam(":fone", $this->fone);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":avaliacao", $this->avaliacao);
        $stmt->bindParam(":obs", $this->obs);
        $stmt->execute();
    }
    
}//Fecha classe Convênio
