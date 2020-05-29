<?php
  include ( "../model/aluno.php" );
  $aluno1 = new Aluno ();

  $Nome = $_POST [ "Nome" ];

  $email = $_POST [ "email" ];

  $telefone = $_POST [ "telefone" ];

  $inserir = $aluno1 -> cadastrar ( $Nome , $email , $telefone );
  if ( $inserir == 1 ) {
    header ( 'location: ../view/formulario.php?mensagem=sucesso' );
  }else{
    header ( 'local: ../view/formulario.php?mensagem=erro' );
  }
?>
