<?php
include("conexao.php");

$query = "select * from apartamento"; 
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



function listaaparmentos(){

      $query = "select * from apartamentos"; 
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

function insertapartamentos($numero_apto, $area_apto, $codigo_edificio, $codigo_morador , $valor ){

   $query = "INSERT INTO morador (numero_apto, area_apto, codigo_edificio', codigo_morador' , valor) VALUES ('$numero_apto', '$area_apto', '$codigo_edificio', '$codigo_morador' , '$valor')";
   /* echo $query */
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