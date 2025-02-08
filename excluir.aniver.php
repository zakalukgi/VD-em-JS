<?php
include("conexao.php");
$excluir=$_POST[ 'pesquisar'];
$sq1= "DELETE FROM aniver WHERE nome='$excluir'";
if (mysqli_query ($conexao, $sq1)){
echo "Cadastro excluído";
print "‹script› location.href='index.htm'; </script›";
}
else{
  echo "Não foi realizada a operação".mysqli_error ($conexao);
}
mysqli_close($conexao);
?>