<?php
session_start();
if(!empty($_SESSION['login'])){
    //echo $_SESSION['login'];
}
else{
    header("location:../index.php");
}

require "../backEndCode/databaseConnection.php" ;
require "../backEndCode/signupConnection.php" ;


?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Create new user</title>

    <link rel="stylesheet" href="../css/index.css">

</head>
<body>

<header>
    <?php include "header.php"; ?>
</header>

<?php echo $errorMassage; ?>

<main>
    <div class="main">
            <div class="mainContainer">

                <div class="formDiv">

                    <form action="signup.php" method="$_GET">

                        <fieldset style="padding: 15px; width: 100%; border-color: #063970 ">
                            <legend style="font-size: 30px; padding: 10px; color:red" >Signup Here</legend>

                            
                                <?php if(isset($_GET['userNotFoundMassage']))
                                    {
                                        echo '<script type="text/javascript">alert("User not Found");</script>'; 

                                        echo "<h7 style=\"color : red\">User not found. <strong>Try again </strong></h7>";
                                    }
                                ?>
                               
                            

                            <label for="email" >Enter your email:</label>
                            <input type="email" name="email" id="email" placeholder="Email" required>

                            <label for="password" >Enter your password:</label>
                            <input type="password" name="password" id="password" placeholder="Password" required>

                            <button type="submit" name="signup">Signup</button>

                        </fieldset>

                </form>

                <?php 
                if(!empty($email) && !empty($password)){
                    $converted_password = md5($password);

                    $sql_2 = "SELECT * FROM user WHERE Email='$email' ";

                    $query_2 = $connection->query($sql_2);

                    if($query_2->num_rows>0){
                        echo '<script type="text/javascript">alert("User already exsist");</script>';
                    
                    }
                    else{
                        $sql = "INSERT INTO user(Email,User_Password) VALUES('$email','$converted_password')  ";
                        $query = $connection->query($sql);

                        echo "<h5 style='color:green;width:3300px; font-weight:bold;text-align:center;background-color:green;color:white;padding:15px'>User created successfully...</h5>";
                    
                    }
                }
                
                
                ?>
                    
                </div>

                
            </div>

        </div>
</main>




    
    
</body>
</html>