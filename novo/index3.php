<?php 
require 'conection.php';
$select = $conexao->prepare("SELECT *FROM biotecnologia");
$link = mysqli_connect("localhost","my_user","my_password","my_db");
mysqli_set_charset($link,"utf8");
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
 .menu{
   position: absolute;
   top:10%;
   left:5%;
 }
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
          
    <title>Document</title>
</head>
<body>
    
    <div class="header_ajustavel">
        <div class="parallax"><img class="responsve-img"src="materialize/img/header.jpg" height="370" width="100%">
        
      
   
   

        <h1 class="logo_cima">Portfólio Tecnológico<br><h5 class="logo_baixo">Coordenação de Inovação Tecnológica</h5></h1>


<nav class="navbar #3f51b5 indigo">
<div class="menu">
  <h5><a href="biotecnologia">BIOTECNOLOGIA</a></h5>
</div>

</nav>




<br><br><br>

  <!--patente-->
  <br><br><br>
  <div class="row">
  <?php foreach($fecth as $produto) { ?>	
    <?php echo  '
    
  <div class="col s3 m3 l3">
    <div class="card">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="materialize/img/bebedouro.png">
      </div>
      <div class="card-content">
       <h7>Card Title</h7>
      
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><i class="material-icons right">X</i>Card Title</span>
        <p>Here is some more information about this product that is only revealed once clicked on.</p>
      </div>
    </div>
 

    </div>
<!--fim-->



</div>
' ?>
   </div>
<?php } 
?>
<!--fim-->





      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.js"></script>
      <script>    $(".button-collapse").sideNav();
      
      </script>
     

     
</body>
</html>