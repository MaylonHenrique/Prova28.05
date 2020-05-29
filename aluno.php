<?php
class  Aluno {
  private  $Nome , $email , $telefone ;

   public function  setTelefone ($telefone) {
    $this -> telefone = $telefone;
  }
   public function  getTelefone() {
    return  $this -> telefone ;
  }
   public function  setNome ($Nome) {
    $this -> nome = $Nome;
  }
   public function  setEmail ($email) {
    $this -> email = $email;
  }
   public function getNome () {
    return  $this -> nome;
  }
   public function getEmail () {
    return  $this -> email;
  }
   public function cadastrar ( $Nome , $email , $telefone) {
    $this -> setNome ( $Nome );

    $this -> setEmail ( $email );

    $this -> setTelefone( $telefone );

    echo  $sqlInsert = "insert into aluno
    (nome, email, telefone)
    values
    ('{$this-> getNome ()}', '{$this-> getEmail ()}',
    '{$this-> getTelefone ()}') ";

    include ( "Conexao.php" );

    $conectar = new  Conexao ();

    if ( $retornoInsert = $conectar -> getConectar () -> query ( $sqlInsert )) {
      return 1 ;
    } else {
      return 0 ;
    }
  }
   public function listar () {
    $lista = "selecione * de aluno" ;
    include ( "Conexao.php" );
    $objetoListar = new Conexao ();

    $retornoBanco = $objetoListar -> getConectar () -> query ( $lista );
    $dados = array ();

    while ($temp = $retornoBanco -> fetch_array()) {
      $dados[]=$temp;
    }
    return  $dados ;
  }
}
?>
