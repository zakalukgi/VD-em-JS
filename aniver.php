<?php
    include("conexao.php");
    $nome=$_POST['nome'];
    $rg=$_POST['rg'];
    $data=$_POST['data'];
    $hora=$_POST['hora'];
    $conv=$_POST['conv'];
        
    
    $sql="INSERT INTO aniver(nome, rg, data, hora, conv) 
    VALUES('$nome', '$rg', '$data', '$hora', '$conv')"; 
    
        if(mysqli_query($conexao , $sql)){
            echo "Usuário cadastrado com sucesso";
    }
        else{
            echo "Erro".mysqli_connect_error($conexao);
    }
            mysqli_close($conexao);
?>