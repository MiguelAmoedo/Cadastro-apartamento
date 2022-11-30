<?php
include("conexao.php");

$query = "select * from edificio"; 
$result_query = mysqli_query( $conn, $query );

echo "<table>";
# Exibe os registros na tela 
while ($row = mysqli_fetch_array( $result_query ))
{ 
      echo "<tr>";
      print "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3];
      echo "</tr>";
}          
echo "</table>";

mysqli_close($conn);



function listaedificios(){

      $query = "select * from edificio"; 
      $result_query = mysqli_query( $conn, $query );
      
      echo "<table>";
      # Exibe os registros na tela 
      while ($row = mysqli_fetch_array( $result_query ))
      { 
            echo "<tr>";
            print "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3]. $row[4] . "<td>" . $row[5] . "<td>" . $row[6];
            echo "</tr>";
      }          
      echo "</table>";

      mysqli_close($conn);
    
   }

function insertedificio( $nome, $cep, $numero, $complemento, $data_vistoria, $data_construcao){

   $query = "INSERT INTO edificio (nome, cep, numero, complemento, data_vistoria, data_construcao) VALUES ('$nome','$cep','$numero','$complemento','$data_vistoria','$data_construcao')";
   /*echo $query*/
   $insert = mysqli_query($conn, $query);

   if($insert){
       echo"<script language='javascript' type='text/javascript'>
       alert('Edificio cadastrado com sucesso!');window.location.
       href='index.html'</script>";
     }else{
       echo"<script language='javascript' type='text/javascript'>
       alert('Não foi possível cadastrar esse edificio');window.location
       .href='cadastroedificio.html'</script>";
          
     }
}

?>