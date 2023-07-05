<?php
session_start();
if(!empty($_SESSION['login'])){
    echo $_SESSION['login'];
}
else{
    header("location:../index.php");
}

require "../backEndCode/databaseConnection.php" ;
require "maxfunction.php" ; 
require "sumfunction.php" ; 


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home-IMS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    


    <link rel="stylesheet" href="../css/afterLoginNavBar.css">
    <link rel="stylesheet" href="../css/admin_deshboard.css">

    <script src="https://kit.fontawesome.com/45b272e4b0.js" crossorigin="anonymous"></script>
    
    
</head>
<body>
        <?php include "afterLoginNavBar.php"; ?>

        <div class="main_div">

            <div style="margin-top:5px" class="left_side">
                <?php include "leftSideSheared.php"; ?>
            </div>


        
            <!-- Right side start -->

            <div class="right_side">

                <div class="upper_line">

                    <div class="total_products">
                        <div class="c">
                            <h2 style="font-size: 25px;">Total Products</h2>
                            <h3><?php echo data_list3('product','product_id'); ?> </h3>
                        </div>

                    </div>

                    <div class="total_earnings">
                        <div class="c">
                            <h2 style="font-size: 25px;">Total category</h2>
                            <h3><?php echo data_list3('category','category_id'); ?> </h3>
                        </div>
                    </div>

                   

                </div>



                <div class="lower_line">

                    <div class="total_materials">
                        <div class="c">
                            <h2 style="font-size: 25px;">Total product quantity</h2>
                            <h3><?php echo data_list4('store_product','store_product_quantity'); ?> </h3>
                        </div>
                        

                    </div>

                    <div class="total_suppliers">
                            <div class="c">
                            <h2 style="font-size: 23px;">Current Suppliers</h2>
                            <h3>9</h3>
                        </div>

                    </div>

                </div>


            </div>

            <!-- Right side end -->



        </div>



        

 
    



    
</body>
</html>