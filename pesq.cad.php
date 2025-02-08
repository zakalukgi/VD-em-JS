<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];
    $resultado="SELECT * FROM cadastro WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_serie=mysqli_query($conexao, $resultado);

    while($rows_serie=mysqli_fetch_array($resultado_serie)){
        echo "Nome: ".$rows_serie['nome']."<br>";
        echo "Cpf: ".$rows_serie['cpf']."<br>";
        echo "Telefone: ".$rows_serie['tel']."<br>";
        echo "E-mail: ".$rows_serie['email']."<br>";
       
       
              
        
    }
       echo "<br> <br> <br> ";

?>