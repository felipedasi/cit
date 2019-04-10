<?php
require 'conection.php';
 <?php   $select = $conexao->prepare("SELECT *FROM quimica");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  
  echo "ola mundo";
  }
  
  
  ?>


?>
