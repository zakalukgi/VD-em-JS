<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];
    $resultado="SELECT * FROM aniver WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_serie=mysqli_query($conexao, $resultado);

    while($rows_serie=mysqli_fetch_array($resultado_serie)){
        echo "Nome: ".$rows_serie['nome']."<br>";
        echo "Rg: ".$rows_serie['rg']."<br>";
        echo "Data: ".$rows_serie['data']."<br>";
        echo "Hora: ".$rows_serie['hora']."<br>";
        echo "Convidados: ".$rows_serie['conv']."<br>";
       
              
        
    }
       echo "<br>";

?>