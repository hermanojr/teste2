<?php

require_once 'class/classCrud.php';

class Prontuario extends Crud {
    
    private $id;
    private $Medico_id;
    private $Paciente_id;
    private $Consulta_id;
    private $Exame_id;
    private $Doenca_id;
    private $dataInsercao;
    private $obs;
    private $historicoFamiliar;
    protected $table = "prontuario";
    
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

    function getConsulta_id() {
        return $this->Consulta_id;
    }

    function getExame_id() {
        return $this->Exame_id;
    }

    function getDoenca_id() {
        return $this->Doenca_id;
    }

    function getDataInsercao() {
        return $this->dataInsercao;
    }

    function getObs() {
        return $this->obs;
    }

    function getHistoricoFamiliar() {
        return $this->historicoFamiliar;
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

    function setConsulta_id($Consulta_id) {
        $this->Consulta_id = $Consulta_id;
    }

    function setExame_id($Exame_id) {
        $this->Exame_id = $Exame_id;
    }

    function setDoenca_id($Doenca_id) {
        $this->Doenca_id = $Doenca_id;
    }

    function setDataInsercao($dataInsercao) {
        $this->dataInsercao = $dataInsercao;
    }

    function setObs($obs) {
        $this->obs = $obs;
    }

    function setHistoricoFamiliar($historicoFamiliar) {
        $this->historicoFamiliar = $historicoFamiliar;
    }
    
    public function insert() {
        $stmt = $this->db->prepare("insert into $this->table(Medico_id, Paciente_id, Consulta_id, Exame_id, Doenca_id, dataIserncao, obs, historicoFamiliar) values(:Medico_id, :Paciente_id, :Consulta_id, :Exame_id, :Doenca_id, :dataInsercao; :obs, :historicoFamiliar)");
        $stmt->bindParam(":Medico_id", $this->Medico_id);
        $stmt->bindParam(":Paciente_id", $this->Paciente_id);
        $stmt->bindParam(":Consulta_id", $this->Consulta_id);
        $stmt->bindParam(":dataInsercao", $this->dataInsercao);
        $stmt->bindParam(":obs", $this->obs);
        $stmt->bindParam(":historicoFamiliar", $this->historicoFamiliar);
        $stmt->execute();        
    }

    public function update() {
        $stmt = $this->db->prepare("update $this->table set Medico_id = :Medico_id, Paciente_id = :Paciente_id, Consulta_id = :Consulta_id, Exame_id = :Exame_id, Doenca_id = :Doenca_id, dataInsercao = :dataInsercao, obs = :obs, historicoFamiliar = :historicoFamiliar");
        $stmt->bindParam(":id", $this->id);
        $stmt->bindParam(":Medico_id", $this->Medico_id);
        $stmt->bindParam(":Paciente_id", $this->Paciente_id);
        $stmt->bindParam(":Consulta_id", $this->Consulta_id);
        $stmt->bindParam(":Exame_id", $this->Exame_id);
        $stmt->bindParam(":Doenca_id", $this->Doenca_id);
        $stmt->bindParam(":dataInsercao", $this->dataInsercao);
        $stmt->bindParam(":obs", $this->obs);
        $stmt->bindParam(":historicoFamiliar", $this->historicoFamiliar);
        $stmt->execute();        
    }

}//fecha classe Prontuario

