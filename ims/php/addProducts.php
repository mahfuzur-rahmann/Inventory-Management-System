<?php
session_start();
if(!empty($_SESSION['login'])){
    echo $_SESSION['login'];
}
else{
    header("location:../index.php");
}

require "../backEndCode/databaseConnection.php" ;
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Add product</title>

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
    color: rgb(129, 85, 2); margin-left: 5px; font-weight:bold;text-decoration:underline;">Add new product: </h3>
                    


                        <form style="margin-left:10px" action="addProducts.php">

                            <div style="margin-top:20px" class="form-group">

                                <label style="font-weight:bold" for="name">Product name: </label>
                                <input type="text" class="form-control" name="product_name" required>

                            </div>

                            <div style="margin-top:20px" class="form-group">

                                <label style="font-weight:bold" for="name">Product category: </label>
                                <br>
                                <select  class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="product_category" id="" required>
                                    <?php

                                    $sql3 = "SELECT * FROM category ";
                                    $query_3 = $connection->query($sql3);
                                    while($data3 =  mysqli_fetch_array($query_3)){
                                    
                                    $category_id = $data3['category_id'];
                                    $category_name = $data3['category_name'];
                                    $category_entry_date = $data3['category_entry_date'];

                                    echo " <option value = '$category_id'> $category_name</option>";
                                    }

                                    ?>

                                    
                                </select>
                                

                            </div>

                            <div style="margin-top:20px" class="form-group">

                                <label style="font-weight:bold" for="name">Product code: </label>
                                <input type="text" class="form-control" name="product_code" required>

                            </div>

                            <div style="margin-top:20px " class="form-group">

                                <label style="font-weight:bold" for="pwd">Entry date:</label>
                                <input type="date" class="form-control" name="product_entry_date" required >

                            </div>

                            <button style="margin-top:20px; width:100px" type="submit" value="submit" class="btn btn-primary">Add</button>
                        </form>

                        <!-- Backend code here for adding category -->

                        <?php

                            


                            if(isset($_GET['product_name'])){

                                $product_name =  $_GET['product_name'];
                                $product_category =  $_GET['product_category'];
                                $product_code =  $_GET['product_code'];
                                $product_entry_date =  $_GET['product_entry_date'];

                                $sql_2 = "SELECT product_name FROM product WHERE product_name='$product_name' ";

                                    $query_2 = $connection->query($sql_2);

                                    if($query_2->num_rows>0){
                                        echo '<script type="text/javascript">alert("Product already exsist");</script>';
                                    
                                    }
                                    else{
                                        $sql  ="INSERT INTO product (product_name,product_category,product_code,product_entry_date) VALUES ('$product_name', '$product_category', '$product_code', '$product_entry_date')";

                                        if($connection->query($sql) === true){



                                            echo "<h5 style='color:green; font-weight:bold;text-align:center;background-color:rgb(253, 253, 93);color:black;padding:15px'>Product added successfully...</h5>";
                                        }
                                        else{
                                            echo "Product add failed....";
                                    
                                        }


                                    }
          

                            }


                        ?>

                           

                </div>


            </div>

            <!-- Right side end -->



        </div>



        

 
    



    
</body>
</html>