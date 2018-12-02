<?php

require_once 'classCrud.php';

class clinica extends Crud {
    
    protected $id;
    protected $nome;
    protected $cnpj;
    protected $endereco;
    protected $bairro;
    protected $municipio;
    protected $uf;
    protected $cep;
    protected $fone;
    protected $email;
    protected $avaliacao;
    protected $dataCriacao;
    protected $table = "clinica";
    
    public function __construct(PDO $db) {
        parent::__construct($db);
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getCnpj() {
        return $this->cnpj;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getBairro() {
        return $this->bairro;
    }

    function getMunicipio() {
        return $this->municipio;
    }

    function getUf() {
        return $this->uf;
    }

    function getCep() {
        return $this->cep;
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

    function getDataCriacao() {
        return $this->dataCriacao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setCnpj($cnpj) {
        $this->cnpj = $cnpj;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setBairro($bairro) {
        $this->bairro = $bairro;
    }

    function setMunicipio($municipio) {
        $this->municipio = $municipio;
    }

    function setUf($uf) {
        $this->uf = $uf;
    }

    function setCep($cep) {
        $this->cep = $cep;
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

    function setDataCriacao($dataCriacao) {
        $this->dataCriacao = $dataCriacao;
    }

    public function insert() {
        $stmt = $this->db->prepare("insert into $this->table(nome, cnpj, endereco, bairro, municipio, uf, cep, fone, email, avaliacao, dataCriacao) values(:nome, :cnpj, :endereco, :bairro, :municipio, :uf, :cep, :fone, :email, :avaliacao, :dataCriacao)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":cnpj", $this->cnpj);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":municipio", $this->municipio);
        $stmt->bindParam(":uf", $this->uf);
        $stmt->bindParam(":cep", $this->cep);
        $stmt->bindParam(":fone", $this->fone);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":avaliacao", $this->avaliacao);
        $stmt->bindParam(":dataCriacao", $this->dataCriacao);
        $stmt->execute();
    }
    
    public function update() {
        $stmt = $this->db->prepare("update $this->table set nome = :nome, cnpj = :cnpj, endereco = :endereco, bairro = :bairro, municipio = :municipio, uf = :uf, cep = :cep, fone = :fone, email = :email, avaliacao = :avaliacao, dataCriacao = :dataCriacao where $this->table.id=:id");
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":cnpj", $this->cnpj);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":municipio", $this->municipio);
        $stmt->bindParam(":uf", $this->uf);
        $stmt->bindParam(":cep", $this->cep);
        $stmt->bindParam(":fone", $this->fone);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":avaliacao", $this->avaliacao);
        $stmt->bindParam(":dataCriacao", $this->dataCriacao);
        $stmt->execute();
    }
    
}//Fecha classe Clinica
