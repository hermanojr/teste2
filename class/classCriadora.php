<?php

require_once 'classSingleton.php';
require_once 'classLogin.php';
require_once 'classPaciente.php';
require_once 'classFuncionario.php';
require_once 'classMedico.php';
require_once 'classClinica.php';
require_once 'classDoenca.php';
require_once 'classExame.php';
require_once 'classConsulta.php';
require_once 'classConvenio.php';
require_once 'classProntuario.php';

class Criadora {
    
    public static function criaDB() {
        return ConexaoSingleton::getInstance();
    }
    
    public static function criaLogin() {
        return new Login(ConexaoSingleton::getInstance());
    }
    
    public static function criaPaciente() {
        return new Paciente(ConexaoSingleton::getInstance());
    }
    
    public static function criaFuncionario() {
        return new Funcionario(ConexaoSingleton::getInstance());
    }
    
    public static function criaMedico() {
        return new Medico(ConexaoSingleton::getInstance());
    }
    
    public static function criaClinica() {
        return new Clinica(ConexaoSingleton::getInstance());
    }
    
    public static function criaDoenca() {
        return new Doenca(ConexaoSingleton::getInstance());
    }
    
    public static function criaExame() {
        return new Exame(ConexaoSingleton::getInstance());
    }
    
    public static function criaConsulta() {
        return new Consulta(ConexaoSingleton::getInstance());
    }
    
    public static function criaConvenio() {
        return new Convenio(ConexaoSingleton::getInstance());
    }
    
    public static function criaProntuario() {
        return new Prontuario(ConexaoSingleton::getInstance());
    }
    
}//Fecha classe Criadora
