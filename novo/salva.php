<style>
p{
    color:#FFF;
}
</style>
<?php
require 'conexao.php';

$email = $_POST['email'];
if ($email !='' ) 
{
$query = mysqli_query($conn, "INSERT INTO newsletter (
					email) VALUES('$email')");

echo "<p><b>Email cadastrado com sucesso</b></p>";

}
else{
    echo "por favor insira dados válidos";
}




?>