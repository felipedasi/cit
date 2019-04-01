<?php
require 'conection.php';

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
    .menu{
      position:relative;
      top:25%;

    }
   .tabs .tab a{
            color:#FFF;
        }
        .tabs .indicator {
            background-color:#01579b;
        } 
        .tab_menu{
          font-size:10pt;
        }
        .nave{
          position:absolute;
          top:90%;
        }
        .menubar{
          position:absolute;
        top:90%;
        }


    </style>
          
    <title>Portal Tecnológico</title>
</head>
<body>
  <style>
  .img{
    z-index:2;
  }
  </style>
    <div class="row">
   <div class="slider">
    <ul class="slides">
      <li>
        <img  class="img" src="materialize/img/header.jpg"> <!-- random image -->
        <div class="caption center-align">
          <h3>This is our big Tagline!</h3>
          <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5>
        </div>
      </li>
    
    </ul>
   
      <nav class="nav-bar navbar #536dfe indigo accent-2 menubar ">
<div class="row menu ">
 
    
      <ul class="tabs #536dfe indigo accent-2">
        <li class="tab col s2 tab_menu"><a href="#test1">Biotecnologia</a></li>
        <li class="tab col s2"><a href="#test2">Engenharia</a></li>
       <li class="tab col s1"><a href="#test3">Farmácia</a></li>
       <li class="tab col s1"><a href="#test4">Química</a></li>
       <li class="tab col s1"><a href="#test5">Outros</a></li>
      </ul>
    
    </div>
  </nav>
  </div>
      

       
<!--inicio-->

<br><br><br>
<div class="row">	
<div id="test1">
  <?php   $select = $conexao->prepare("SELECT *FROM biotecnologia");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  ?>
   <!--patente-->
  <?php
  echo 

'  <div class="col s6 m6 l6">
    <div class="card large ">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="foto/'.$produto['nome_imagem'].'">
      </div>
      <div class="card-content">
       <h6 class="activator"><b>'.$produto['titulo'].'</b></h6>
      
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><i class="material-icons right">X</i>'.$produto['titulo'].'</span>
        <p>'.$produto['resumo'].'</p>
      
    </div>
    </div>
    </div>
    '

?>



<!--fim-->

















  <?php }?>
</div>



<!--fim-->
       
<!--inicio-->

<div class="row">	
<div id="test2">
  <?php   $select = $conexao->prepare("SELECT *FROM engenharia");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  ?>
   <!--patente-->
  <?php
  echo 

'  <div class="col s6 m6 l6">
    <div class="card large ">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="foto/'.$produto['nome_imagem'].'">
      </div>
      <div class="card-content">
       <h6 class="activator"><b>'.$produto['titulo'].'</b></h6>
      
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><i class="material-icons right">X</i>'.$produto['titulo'].'</span>
        <p>'.$produto['resumo'].'</p>
      
    </div>
    </div>
    </div>
    '

?>



<!--fim-->

















  <?php }?>
</div>

<!--farmacia-->
<!--inicio-->


<div class="row">	
<div id="test3">
  <?php   $select = $conexao->prepare("SELECT *FROM farmacia");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  ?>
   <!--patente-->
  <?php
  echo 

'  <div class="col s6 m6 l6">
    <div class="card large ">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="foto/'.$produto['nome_imagem'].'">
      </div>
      <div class="card-content">
       <h6 class="activator"><b>'.$produto['titulo'].'</b></h6>
      
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><i class="material-icons right">X</i>'.$produto['titulo'].'</span>
        <p>'.$produto['resumo'].'</p>
      
    </div>
    </div>
    </div>
    '

?>



<!--fim-->

















  <?php }?>
</div>



<!--fim-->
<!--quimica-->
<!--inicio-->


<div class="row">	
<div id="test4">
  <?php   $select = $conexao->prepare("SELECT *FROM quimica");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  ?>
   <!--patente-->
  <?php
  echo 

'  <div class="col s6 m6 l6">
    <div class="card large ">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="foto/'.$produto['nome_imagem'].'">
      </div>
      <div class="card-content">
       <h6 class="activator"><b>'.$produto['titulo'].'</b></h6>
      
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><i class="material-icons right">X</i>'.$produto['titulo'].'</span>
        <p>'.$produto['resumo'].'</p>
      
    </div>
    </div>
    </div>
    '

?>



<!--fim-->

















  <?php }?>
</div>



<!--fim-->
<!--farmacia-->
<!--inicio-->


<div class="row">	
<div id="test4">
  <?php   $select = $conexao->prepare("SELECT *FROM outros");
$select->execute();
$fecth = $select->fetchAll();
  
  foreach($fecth as $produto) {  ?>
   <!--patente-->
  <?php
  echo 

'  <div class="col s6 m6 l6">
    <div class="card large ">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="foto/'.$produto['nome_imagem'].'">
      </div>
      <div class="card-content">
       <h6 class="activator"><b>'.$produto['titulo'].'</b></h6>
      
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><i class="material-icons right">X</i>'.$produto['titulo'].'</span>
        <p>'.$produto['resumo'].'</p>
      
    </div>
    </div>
    </div>
    '

?>



<!--fim-->

















  <?php }?>
</div>



<!--fim-->
<!--fim-->


</div>



      <!--Import jQuery before materialize.js-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <script type="text/javascript" src="materialize/js/materialize.js"></script>
      <script>    $(".button-collapse").sideNav();

       document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.slider');
    var instances = M.Slider.init(elems, options);
  });

  // Or with jQuery

       $('.slider').slider();
    

        
      
      </script>
     

     
</body>
</html>