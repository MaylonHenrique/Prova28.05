<?php
  class  Conexao {
    private  $local = "localhost" ;
    private  $usuário = "root" ;
    private  $senha = "" ;
    private  $dataBase = "sistemaescola" ;
    private  $conectar ;

     public function setLocal ( $local ) {
      $this -> local = $local ;
    }
     public function getLocal () { 
      return  $this -> local ;
    }
     public function setUser ( $user ) {
      $this -> user = $user ;
    }
     public function getUser () {
      return  $this -> usuário ;
    }
     public function setSenha ( $senha) {
      $this -> senha = $senha ;
    }
     public function getSenha () {
      return  $this -> senha;
    }
     public function setDataBase ( $dataBase ) {
      $this -> dataBase = $dataBase ;
    }
     public function getDataBase () {
      return  $this -> dataBase ;
    }
     public function setConectar ( $conectar ) {
      $this -> conectar = $conectar ;
    }
     public function getConectar () {
      return  $this -> conectar ;
    }
     public function __construct () {
        $conectar = new  Mysqli (
            $this -> getLocal (),
            $this -> getUser (),
            $this -> getSenha (),
            $this -> getDataBase ()
          );
        $this -> setConectar ( $conectar );
    }
  }
?>
