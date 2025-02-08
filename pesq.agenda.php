<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];
    $resultado="SELECT * FROM agendamento WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_serie=mysqli_query($conexao, $resultado);

    while($rows_serie=mysqli_fetch_array($resultado_serie)){
        echo "Nome: ".$rows_serie['nome']."<br>";
        echo "Telefone: ".$rows_serie['tel']."<br>";
        echo "Data: ".$rows_serie['data']."<br>";
        echo "Hora: ".$rows_serie['hora']."<br>";
        echo "Unidade: ".$rows_serie['unidades']."<br>";
       
              
        
    }
       echo "<br>";

?>