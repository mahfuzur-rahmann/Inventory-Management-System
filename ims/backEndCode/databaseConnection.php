<?php
$connection = new mysqli('localhost','root','','ims');
if(!$connection){
   $errorMassage ="No connection with database";
}else{
   $errorMassage = '';
}

?>