<?php

require_once 'classCrud.php';

class Consulta extends Crud {
    
    private $id;
    private $Medico_id;
    private $Paciente_id;
    private $tipo;
    private $dataConsulta;
    private $horaInicio;
    private $valor;
    private $sintoma;
    private $horaTermino;
    private $observacao;
    protected $table = "consulta";
    
    public function __construct(PDO $db) {
        parent::__construct($db);
    }
    
    function getId() {
        return $this->id;
    }

    function getMedico_id() {
        return $this->Medico_id;
    }

    function getPaciente_id() {
        return $this->Paciente_id;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getDataConsulta() {
        return $this->dataConsulta;
    }

    function getHoraInicio() {
        return $this->horaInicio;
    }

    function getValor() {
        return $this->valor;
    }

    function getSintoma() {
        return $this->sintoma;
    }

    function getHoraTermino() {
        return $this->horaTermino;
    }

    function getObservacao() {
        return $this->observacao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMedico_id($Medico_id) {
        $this->Medico_id = $Medico_id;
    }

    function setPaciente_id($Paciente_id) {
        $this->Paciente_id = $Paciente_id;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setDataConsulta($dataConsulta) {
        $this->dataConsulta = $dataConsulta;
    }

    function setHoraInicio($horaInicio) {
        $this->horaInicio = $horaInicio;
    }

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setSintoma($sintoma) {
        $this->sintoma = $sintoma;
    }

    function setHoraTermino($horaTermino) {
        $this->horaTermino = $horaTermino;
    }

    function setObservacao($observacao) {
        $this->observacao = $observacao;
    }

           
    public function insert() {
        $stmt = $this->db->prepare("insert into $this->table(Medico_id, Paciente_id, tipo, dataConsulta, horaInicio, valor, sintoma, horaTermino, observacao) values(:Medico_id, :Paciente_id, :tipo, :dataConsulta, :horaInicio, :valor, :sintoma, :horaTermino, :observacao)");
        $stmt->bindParam(":Medico_id", $this->Medico_id);
        $stmt->bindParam(":Paciente_id", $this->Paciente_id);
        $stmt->bindParam(":tipo", $this->tipo);
        $stmt->bindParam(":dataConsulta", $this->dataConsulta);
        $stmt->bindParam(":horaInicio", $this->horaInicio);
        $stmt->bindParam(":valor", $this->valor);
        $stmt->bindParam(":sintoma", $this->sintoma);
        $stmt->bindParam(":horaTermino", $this->horaTermino);
        $stmt->bindParam(":observacao", $this->observacao);
        $stmt->execute();
    }
    
    public function update() {
        $stmt = $this->db->prepare("update $this->table set Medico_id = :Medico_id, Paciente_id = :Paciente_id, tipo = :tipo, dataConsulta = :dataConsulta, horaInicio = :horaInicio, valor = :valor, sintoma = :sintoma, horaTermino= :horaTermino, observacao = :observacao where $this->table.id=:id");
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":Medico_id", $this->Medico_id);
        $stmt->bindParam(":Paciente_id", $this->Paciente_id);
        $stmt->bindParam(":tipo", $this->tipo);
        $stmt->bindParam(":dataConsulta", $this->dataConsulta);
        $stmt->bindParam(":horaInicio", $this->horaInicio);
        $stmt->bindParam(":valor", $this->valor);
        $stmt->bindParam(":sintoma", $this->sintoma);
        $stmt->bindParam(":horaTermino", $this->horaTermino);
        $stmt->bindParam(":observacao", $this->observacao);
        $stmt->execute();
    }
    
}//Fecha classe Consulta