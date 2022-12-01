<?php
 
 $id = $_POST['id'];

if($id != 0){

    include("alterar-palavra.php");

} 

else {
    include("inserir-palavra.php");
}
?>