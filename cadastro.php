<?php
    include("conexao.php");
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $tel=$_POST['tel'];
    $email=$_POST['email'];
        
    
    $sql="INSERT INTO cadastro (nome, cpf, tel, email) 
    VALUES('$nome', '$cpf', '$tel', '$email')"; 
    
        if(mysqli_query($conexao , $sql)){
            echo "Usuário cadastrado com sucesso";
    }
        else{
            echo "Erro".mysqli_connect_error($conexao);
    }
            mysqli_close($conexao);
?>