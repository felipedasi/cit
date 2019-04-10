<link rel="stylesheet" href="materialize/css/materialize.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    

  <!-- Compiled and minified JavaScript -->
  <script src="materialize/js/materialize.min.js"></script>
<style>
input{
    color:#FFF;
    font-weight:600;
    
}
.formulario{
    position:absolute;
    top:10px;
    color:#FFF;
    font-weight:500;
}
.alinha{
  position:absolute;
  left:0;
}
label{
  color:#FFF;
  font-size:14pt;
}
</style>

<?php
require 'conection.php';

echo '
<form method="POST" action="salva.php">
<div class="row"> <div class="input-field col s4 m4 l4">
          <input placeholder="Digite aqui seu email" id="first_name" type="text" class="validate" name="email">
      
        </div>
         <div class="input-field col s6">
<button class="btn #3d5afe indigo accent-3">Assinar</button>
         </div>
        
        
        </div>
</div>

</form>





';




?>