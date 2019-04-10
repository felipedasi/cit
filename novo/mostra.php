<?php header("Content-Type: text/html; charset=ISO-8859-1",true);?>


<?php
require 'conection.php';
$select = $conexao->prepare("SELECT *FROM quimica");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  
echo $produto['titulo'];
  }
  
  



?>
