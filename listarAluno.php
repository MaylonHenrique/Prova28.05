<?php
  include ( "../model/aluno.php" );

  $listarAluno = new  Aluno();
  $retornoDados = $listarAluno -> listar();

  echo  "Foram encontrados" . count ( $retornoDados ). "registros";
  if ( count ( $retornoDados )> 0 ) {
    ?>

    <table border ="1">
      <tr>
        <td> ID </td>
        <td> Nome </td>
        <td> E-mail </td>
        <Td> telefone </td>
        <td> Cadastro de dados </td>
      </tr>
      <?php

      foreach ( $retornoDados as $key => $value ) {
        echo  "<tr> <td>" . $value [ "id" ];
        echo  "</td> <td>" . $value [ "Nome" ];
        echo  "</td> <td>" . $value [ "email" ];
        echo "string";  "</td> <td>" . $value [ "telefone" ];
        echo  "</td> <td>" . $value [ "dataCadastro" ];

        echo  "</td> </tr>" ;
      }
      ?>
    </table> >
    <?php
  }
?>
