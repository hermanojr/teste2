<?php

require_once 'classCrud.php';

abstract class Pessoa extends Crud {
    
    protected $nome;
    protected $nascimento;
    protected $cpf;
    protected $sexo;
    protected $endereco;
    protected $bairro;
    protected $municipio;
    protected $uf;
    protected $cep;
    protected $fone;
    protected $celular;
    protected $email;
    
    
    public function __construct($db) {
        parent::__construct($db);
    }
    
    function getNome() {
        return $this->nome;
    }

    function getNascimento() {
        return $this->nascimento;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getSexo() {
        return $this->sexo;
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

    function getCelular() {
        return $this->celular;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNascimento($nascimento) {
        $this->nascimento = $nascimento;
    }

    function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
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

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    
}//Fecha classe Pessoa
