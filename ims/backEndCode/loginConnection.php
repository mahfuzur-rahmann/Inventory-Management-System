<?php

//Start the session
session_start();


// Making connection of database..
include "databaseConnection.php" ;

// Stroing values from form...
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];


}

if(!empty($email) && !empty($password)){

        $sql = "SELECT * FROM user WHERE Email='$email' AND User_Password='$password' ";
        $query = $connection->query($sql);

        if($query->num_rows>0 && $query->num_rows<2){
            $_SESSION['login']="Logged in";
            $_SESSION['id'] = $id;
            
           header("location:php\indexAdmin.php?loggedIn");
    
        }
        else
        {
            header("location:index.php?userNotFoundMassage");
            // $user_not_found_massage = "User not found";
        }

}


?>