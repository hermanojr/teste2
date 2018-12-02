<?php

require_once 'classPessoa.php';

class Paciente extends Pessoa {
    
    protected $id;
    protected $Convenio_id;
    protected $numeroConvenio;
    protected $peso;
    protected $altura;
    protected $table = "paciente";
    
    public function __construct(PDO $db) {
        parent::__construct($db);
    }
    
    function getId() {
        return $this->id;
    }

    function getConvenioId() {
        return $this->Convenio_id;
    }
    
    function getNumeroConvenio() {
        return $this->numeroConvenio;
    }

    function getPeso() {
        return $this->peso;
    }

    function getAltura() {
        return $this->altura;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setConvenio_id($Convenio_id) {
        $this->Convenio_id = $Convenio_id;
    }
    
    function setNumeroConvenio($numeroConvenio) {
        $this->numeroConvenio = $numeroConvenio;
    }

    function setPeso($peso) {
        $this->peso = $peso;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

        
    public function insert() {
        $stmt = $this->db->prepare("insert into $this->table (nome, nascimento, cpf, endereco, bairro, municipio, uf, cep, fone, celular, email, Convenio_id, numeroConvenio, peso, altura) values(:nome, :nascimento, :cpf, :endereco, :bairro, :municipio, :uf, :cep, :fone, :celular, :email, :Convenio_id, :numeroConvenio, :peso, :altura)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":nascimento", $this->nascimento);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":municipio", $this->municipio);
        $stmt->bindParam(":uf", $this->uf);
        $stmt->bindParam(":cep", $this->cep);
        $stmt->bindParam(":fone", $this->fone);
        $stmt->bindParam(":celular", $this->celular);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":Convenio_id", $this->Convenio_id);
        $stmt->bindParam(":numeroConvenio", $this->numeroConvenio);
        $stmt->bindParam(":peso", $this->peso);
        $stmt->bindParam(":altura", $this->altura);
        $stmt->execute();
    }
    
    public function update() {
        $stmt = $this->db->prepare("update $this->table set nome = :nome, nascimento = :nascimento, cpf = :cpf, endereco = :endereco, bairro = :bairro, municipio = :municipio, uf = :uf, cep = :cep, fone = :fone, celular = :celular, email = :email, Convenio_id = :Convenio_id, numeroConvenio = :numeroConvenio, peso = :peso, altura = :altura where $this->table.id=:id");
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":nascimento", $this->nascimento);
        $stmt->bindParam(":cpf", $this->cpf);
        $stmt->bindParam(":endereco", $this->endereco);
        $stmt->bindParam(":bairro", $this->bairro);
        $stmt->bindParam(":municipio", $this->municipio);
        $stmt->bindParam(":uf", $this->uf);
        $stmt->bindParam(":cep", $this->cep);
        $stmt->bindParam(":fone", $this->fone);
        $stmt->bindParam(":celular", $this->celular);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":Convenio_id", $this->Convenio_id);
        $stmt->bindParam(":numeroConvenio", $this->numeroConvenio);
        $stmt->bindParam(":peso", $this->peso);
        $stmt->bindParam(":altura", $this->altura);
        $stmt->execute();
    }
    
}//Fecha classe Paciente
