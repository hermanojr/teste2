<?php
session_start();

class Login {
    
    private $db;
    private $funcionario;
    private $medico;
    
    public function __construct(PDO $db) {
        $this->db = $db;
    }
    
    public function autenticar($email, $senha) {
        $query = "select * from funcionario where email=:email and senha=:senha";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        //$stmt->bindParam(":senha", (int) $senha); //Posso forçar o tipo de variável por segurança
        $stmt->execute();
        $this->funcionario = $stmt->fetch();
        
        $stmt = $this->db->prepare("select * from medico where email=:email and senha=:senha");
        $stmt->bindParam(":email", $email);
        $stmt->bindParam(":senha", $senha);
        $stmt->execute();
        $this->medico = $stmt->fetch();
        
        if ($this->funcionario) {
            $_SESSION['logado'] = true;
            $_SESSION['cargo'] = $this->funcionario['cargo'];
            return true;
        } else if ($this->medico) {
            $_SESSION['logado'] = true;
            $_SESSION['cargo'] = $this->medico['cargo'];
            return true;
        } else {
            $_SESSION['logado'] = false;
            return false;
        }
    }//Fecha metodo autenticar
    
}//Fecha classe Login
