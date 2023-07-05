<?php
session_start();
if(!empty($_SESSION['login'])){
    echo $_SESSION['login'];
}
else{
    header("location:../index.php");
}

require "../backEndCode/databaseConnection.php" ;
require "myfunction1.php" ;
require "myfunction2.php" ;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Report</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/afterLoginNavBar.css">
    <link rel="stylesheet" href="../css/admin_deshboard.css">
    <link rel="stylesheet" href="../css/addCategory.css">

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

                <div class="add_category">

                <h3 style="margin-top: 10px; 
                    color: rgb(129, 85, 2); margin-left: 5px; font-weight:bold;text-decoration:underline;color:red;">Report: </h3>
                    


                        <form style="margin-left:10px" action="report.php">

                            <div style="margin-top:20px" class="form-group">

                                <label style="font-weight:bold" for="name">Products: </label>
                                <br>
                                <select  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="product_name" id="" required>
                                    <?php data_list('product','product_id','product_name') ?>

                                    
                                </select>
                                

                            </div>

                            <button style="margin-top:20px; width:100px" type="submit" value="submit" class="btn btn-primary">Generate</button>
                        </form>

                        

                        <!-- Backend code here for adding category -->

                        

                        <div class="divide" style="display: flex; flex-direction:row;column-gap:10px">
                            

                            <div style="padding:15px; border:2px solid black; width:100%;height:100%; flex:1;justify-content: center;align-items:center ; text-align:center;">

                            <h1 style="text-decoration:underline;text-align:left;margin-bottom:30px;">Store product:</h1>

                                

                                <?php

                                    if(isset($_GET['product_name'])){

                                        $product_name =  $_GET['product_name'];


                                        $sql_2 = "SELECT * FROM store_product WHERE product_id='$product_name' ";

                                        $in = data_list2('store_product','product_name','product_id',$product_name);



                                        echo "<h4><strog style='color:Red'>Product name:</strog>$in </h4>";
                                        echo "<table  style='width:100%' class='table '> <thead class='table-dark'><tr><td>Store date</td> <td>Quantity</td></tr> </thead>";
                                        echo"<tbody>";

                                        $query_2 = $connection->query($sql_2);
                                        while($data_2 = mysqli_fetch_array($query_2)){
                                            $store_product_quantity = $data_2['store_product_quantity'];
                                            $store_product_entry_date = $data_2['store_product_entry_date'];
                                            $store_product_name = $data_2['product_name'];
                                            $store_product_id = $data_2['product_id'];

                                           
                                            
                                            echo "<tr><td>$store_product_entry_date</td> <td>$store_product_quantity</td></tr>";
                                            

                                        }

                                        echo "</tbody></table>";





                                    }

                                ?>

                            </div>


                            

                            <div style="padding:15px;border: 2px solid black; width:100%;height:100%; flex:1;justify-content: center;align-items:center ; text-align:center;">

                            <h1 style="text-decoration:underline;text-align:left;margin-bottom:30px;">spend product:</h1>

                               

                                <?php

                                    if(isset($_GET['product_name'])){

                                        $product_name =  $_GET['product_name'];


                                        $sql_2 = "SELECT * FROM spend_product WHERE product_id='$product_name' ";

                                        $in = data_list2('store_product','product_name','product_id',$product_name);



                                        echo "<h4><strog style='color:Red'>Product name:</strog>$in </h4>";
                                            echo "<table  style='width:90%' class='table '> <thead class='table-dark'><tr><td>spend date</td> <td>Quantity</td></tr> </thead>";

                                        $query_2 = $connection->query($sql_2);
                                        while($data_2 = mysqli_fetch_array($query_2)){
                                            $spend_product_quantity = $data_2['spend_product_quantity'];
                                            $spend_product_entry_date = $data_2['spend_product_entry_date'];
                                            $spend_product_name = $data_2['product_name'];
                                            $spend_product_id = $data_2['product_id'];

                                            
                                            echo "<tbody><tr><td>$spend_product_entry_date</td> <td>$spend_product_quantity</td></tr>";
                                            

                                        }
                                        echo "</tbody></table>";

                                    }

                                ?>
                            </div>

                        </div>

                        

                    

                </div>


            </div>

            <!-- Right side end -->



        </div>



        

 
    



    
</body>
</html>