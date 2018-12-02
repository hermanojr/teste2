<?php

require_once 'classCrud.php';

class Exame extends Crud {
    
    protected $id;
    protected $nome;
    protected $valor;
    protected $descricao;
    protected $dataInsercao;
    protected $doencaRelacionada;
    protected $tempoResultado;
    protected $tempoExame;
    protected $referencia;
    protected $especialidade;
    protected $table = "exame";
    
    public function __construct(PDO $db) {
        parent::__construct($db);
    }
    
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getValor() {
        return $this->valor;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getDataInsercao() {
        return $this->dataInsercao;
    }

    function getDoencaRelacionada() {
        return $this->doencaRelacionada;
    }

    function getTempoResultado() {
        return $this->tempoResultado;
    }

    function getTempoExame() {
        return $this->tempoExame;
    }

    function getReferencia() {
        return $this->referencia;
    }

    function getEspecialidade() {
        return $this->especialidade;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setDataInsercao($dataInsercao) {
        $this->dataInsercao = $dataInsercao;
    }

    function setDoencaRelacionada($doencaRelacionada) {
        $this->doencaRelacionada = $doencaRelacionada;
    }

    function setTempoResultado($tempoResultado) {
        $this->tempoResultado = $tempoResultado;
    }

    function setTempoExame($tempoExame) {
        $this->tempoExame = $tempoExame;
    }

    function setReferencia($referencia) {
        $this->referencia = $referencia;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

        
    public function insert() {
        $stmt = $this->db->prepare("insert into $this->table(nome, valor, descricao, dataInsercao, doencaRelacionada, tempoResultado, tempoExame, referencia, especialidade) values(:nome, :valor, :descricao, :dataInsercao, :doencaRelacionada, :tempoResultado, :tempoExame, :referencia, :especialidade)");
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":valor", $this->valor);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":dataInsercao", $this->dataInsercao);
        $stmt->bindParam(":doencaRelacionada", $this->doencaRelacionada);
        $stmt->bindParam(":tempoResultado", $this->tempoResultado);
        $stmt->bindParam(":tempoExame", $this->tempoExame);
        $stmt->bindParam(":referencia", $this->referencia);
        $stmt->bindParam(":especialidade", $this->especialidade);
        $stmt->execute();
    }
    
    public function update() {
        $stmt = $this->db->prepare("update $this->table set nome = :nome, valor = :valor, descricao = :descricao, dataInsercao = :dataInsercao, doencaRelacionada = :doencaRelacionada, tempoResultado = :tempoResultado, tempoExame = :tempoExame, referencia = :referencia, especialidade = :especialidade where $this->table.id=:id");
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":nome", $this->nome);
        $stmt->bindParam(":valor", $this->valor);
        $stmt->bindParam(":descricao", $this->descricao);
        $stmt->bindParam(":dataInsercao", $this->dataInsercao);
        $stmt->bindParam(":doencaRelacionada", $this->doencaRelacionada);
        $stmt->bindParam(":tempoResultado", $this->tempoResultado);
        $stmt->bindParam(":tempoExame", $this->tempoExame);
        $stmt->bindParam(":referencia", $this->referencia);
        $stmt->bindParam(":especialidade", $this->especialidade);
        $stmt->execute();
    }
}//Fecha classe Doenca

