<?php
    class Cliente{
        private $id;
        private $nome;
        private $email;
        private $pdo;
 
        public function getId() {
            return $this->id;
        }
 
        public function setId($id) {
            $this->id = $id;
        }
 
        public function getNome() {
            return $this->nome;
        }
 
        public function setNome($nome) {
            $this->nome = $nome;
        }
 
        public function getEmail() {
            return $this->email;
        }
 
        public function setEmail($email) {
            $this->email = $email;
        }
 
        public function conectar() {
            try {
                $dsn = "mysql:dbname=Cliente;host=localhost";
                $dbUser = "root";
                $dbPass = "";
                $this->pdo = new PDO($dsn,$dbUser,$dbPass);
                return true;
           
            } catch (\Throwable $th) {
                echo "Tente mais tarde";
            }
        }  
    }
?>
