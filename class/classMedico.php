<?php

require_once 'classFuncionario.php';

class Medico extends Funcionario {
    
    protected $especialidade;
    protected $table = "medico";
    
    public function __construct(PDO $db) {
        parent::__construct($db);
    }
    
    function getEspecialidade() {
        return $this->especialidade;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

        
    public function insert() {
        $stmt = $this->db->prepare("insert into $this->table(nome, nascimento, cpf, endereco, bairro, municipio, uf, cep, fone, celular, email, senha, cargo, salario, especialidade) values(:nome, :nascimento, :cpf, :endereco, :bairro, :municipio, :uf, :cep, :fone, :celular, :email, :senha, :cargo, :salario, :especialidade)");
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
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":cargo", $this->cargo);
        $stmt->bindParam(":salario", $this->salario);
        $stmt->bindParam(":especialidade", $this->especialidade);
        $stmt->execute();
    }
    
    public function update() {
        $stmt = $this->db->prepare("update $this->table set nome = :nome, nascimento = :nascimento, cpf = :cpf, endereco = :endereco, bairro = :bairro, municipio = :municipio, uf = :uf, cep = :cep, fone = :fone, celular = :celular, email = :email, senha = :senha, cargo = :cargo, salario = :salario, especialidade = :especialidade where $this->table.id=:id");
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
        $stmt->bindParam(":senha", $this->senha);
        $stmt->bindParam(":cargo", $this->cargo);
        $stmt->bindParam(":salario", $this->salario);
        $stmt->bindParam(":especialidade", $this->especialidade);
        $stmt->execute();
    }
    
}//Fecha classe Medico
