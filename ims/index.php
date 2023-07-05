<?php include 'backEndCode\loginConnection.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISM - Login</title>

    <link rel="stylesheet" href="css\index.css">

</head>
<body>

<header>
    <?php include "php\header.php"; ?>
</header>

<?php echo $errorMassage; ?>

<main>
    <div class="main">
            <div class="mainContainer">

                <div class="formDiv">

                    <form action="index.php" method="post">

                        <fieldset style="padding: 15px; width: 100%; border-color: #063970 ">
                            <legend style="font-size: 30px; padding: 10px;" >Login Here</legend>

                            
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

                            <button type="submit" name="login">Login</button>

                        </fieldset>

                </form>
                    
                </div>

                
            </div>

        </div>
</main>


<footer>
    <?php include "php/footer.php"; ?>
</footer>


    
    
</body>
</html>