<?php
    include("conexao.php");
    $nome=$_POST['nome'];
    $tel=$_POST['tel'];
    $data=$_POST['data'];
    $hora=$_POST['hora'];
    $unidades=$_POST['unidades'];
        
    
    $sql="INSERT INTO agendamento(nome, tel, data, hora, unidades) 
    VALUES('$nome', '$tel', '$data', '$hora', '$unidades')"; 
    
        if(mysqli_query($conexao , $sql)){
            echo "Usuário cadastrado com sucesso";
    }
        else{
            echo "Erro".mysqli_connect_error($conexao);
    }
            mysqli_close($conexao);
?>