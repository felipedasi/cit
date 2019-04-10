


<?php

<?php

ini_set( 'default_charset', 'utf-8');

?>

echo "<meta charset='iso-8859-1' />";

require 'conection.php';
$select = $conexao->prepare("SELECT *FROM quimica");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  
echo $produto['titulo'];
  }
  
   echo htmlentities("Atenção"); 



?>


