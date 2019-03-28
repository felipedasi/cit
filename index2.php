<?php
require 'conection.php';
$select = $conexao->prepare("SELECT *FROM biotecnologia");
$select->execute();
$fecth = $select->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="materialize/css/materialize.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

  <!-- Compiled and minified JavaScript -->
  <script src="materialize/js/materialize.min.js"></script>
  <style>
    .logo_cima{
position: absolute;
top:10%;
left:5%;
color:#FFF;
    }
    .logo_baixo{
position: absolute;
color:#FFF;
left:10.5%;
top:24%;
    }
    .navbar{
      position: absolute;
      top:58%
    }
    .staggered-test{
      position: absolute;
      top:95%;
     
    }
    
    </style>
          
    <title>Portal Tecnológico</title>
</head>
<body>
    
    <div class="header_ajustavel">
        <div class="parallax"><img class="responsve-img"src="materialize/img/header.jpg" height="370" width="100%">
        
      
   
   

        <h1 class="logo_cima">Portal Tecnológico<br><h5 class="logo_baixo">Coordenação de Inovação Tecnológica</h5></h1>


<nav class="navbar #536dfe indigo accent-2
">
  </nav>


       





</div>
     
</div>



<br><br><br>
 <div class="row">	

  <?php foreach($fecth as $produto) { 
     echo 
'

  <!--patente-->
  <div class="col s6 m6 l6">
    <div class="card large">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="materialize/img/bebedour.png">
      </div>




      <div class="card-content">
       <h6><b>'.$produto['titulo'].'</b></h6>
      
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><i class="material-icons right">X</i>Card Title</span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      
    </div>
    

<!--fim-->
';
?>

    </div>

</div>
<?php } ?>
<!--fim-->





      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.js"></script>
      <script>    $(".button-collapse").sideNav();
      
      </script>
     

     
</body>
</html>