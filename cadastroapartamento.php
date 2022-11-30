<?php

include("conexao.php");

$numero_apto = $_POST['numero_apto'];
$area_apto = $_POST['area_apto'];
$codigo_edificio = $_POST['codigo_edificio'];
$codigo_morador = $_POST['codigo_morador'];
$valor = $_POST['valor'];

if($numero_apto == "" || $numero_apto == null)
{
    echo "numero do apartamento não pode esta vazio";
}
else
{
  $query = "INSERT INTO edificio (numero_apto, area_apto, codigo_edificio, codigo_morador , valor) VALUES ('$numero_apto, $area_apto, $codigo_edificio, $codigo_morador , $valor')";
  /*echo $query*/
  $insert = mysqli_query($conn, $query);

  if($insert){
      echo"<script language='javascript' type='text/javascript'>
      alert('apartamento cadastrado com sucesso!');window.location.
      href='index.html'</script>";
    }else{
      echo"<script language='javascript' type='text/javascript'>
      alert('Não foi possível cadastrar esse apartamento');window.location
      .href='cadastroapartamento.html'</script>";
      }

}


?>


