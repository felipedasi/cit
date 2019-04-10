
<?php
$pedido = $_GET['id'];
$titulo = $_GET['titulo'];
$descricao = $_GET['descricao'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="materialize/css/materialize.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
    .logo{
        position:absolute;
        left:4%;
        top:-10%;
      
    }
    .titulo{
   font-weight:400;
    }
    </style>

  <!-- Compiled and minified JavaScript -->
  <script src="materialize/js/materialize.min.js"></script>

    <title><?php echo $titulo ?></title>
</head>
<body>
    
  <nav>
    <div class="nav-wrapper #536dfe indigo accent-2">
      <a href="index.php" class="brand-logo"><i class="material-icons large">arrow_back_ios</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
   <h4 class="logo">PORTAL TECNOLÓGICO</h4>
      </ul>
    </div>
  </nav>
  <br><br><br><br>
  <form action="https://docs.google.com/forms/d/e/1FAIpQLSegKJdTHqO3hRzCkUYKpZSjd1wOFF5qOlzdEdi-hFN-LaHwdw/viewform">
 <div class="col s12"><div class="center-align titulo"><b>
 
 <?php echo $titulo.'<br><br>Nº DO PEDIDO:&nbsp;'.$pedido.'</b>'?></div></div> 
 <div class="row">
 <br>
  <div class="col s2"></div>
  <div class="col s7"><?php echo $descricao ?></div>
  <div class="col s7"></div>
  </div>
<div class="row">
<div class="col s12 center-align">
<button class="btn  #536dfe indigo">Click aqui para saber mais</button>
</div>

</div>
  
  </form>
  
  
  
  
</body>
</html>



  <body>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <!--Import jQuery before materialize.js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script type="text/javascript" src="materialize/js/materialize.js"></script>
  </body>