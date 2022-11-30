<?php

include("conexao.php");

$nome = $_POST['nome'];
$cep = $_POST['cep'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$data_vistoria = $_POST['data_vistoria'];
$data_construcao = $_POST['data_construcao'];

if($nome == "" || $nome == null)
{
    echo "Nome não pode estar vazio!";
}
else
    

  
    $query = "INSERT INTO edificio (nome, cep, numero, complemento, data_vistoria, data_construcao) VALUES ('$nome','$cep','$numero','$complemento','$data_vistoria','$data_construcao')";
    $insert = mysqli_query($conn, $query);
    if($insert){

    echo $query;

       echo"<script language='javascript' type='text/javascript'>
        alert('Edificio cadastrado com sucesso!');window.location.
        href='index.html'</script>";
      }else{
        echo"<script language='javascript' type='text/javascript'>s
        alert('Não foi possível cadastrar esse edificio');window.location
        .href='cadastroedificio.html'</script>"; 
      

}


?>