<?php
session_start();
if(!empty($_SESSION['login'])){
    echo $_SESSION['login'];
}
else{
    header("location:../index.php");
}
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Edit a store product</title>

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

                <?php

                    include "../backEndCode/databaseConnection.php" ;


                    if(isset($_GET['name'])){

                        $get_name = $_GET['name'];

                        $sql = "SELECT * FROM store_product WHERE product_id='$get_name' ";

                        $query = $connection->query($sql);

                        $data = mysqli_fetch_array($query);
                        $show_sid = $data['store_product_id'];
                        $show_pid = $data['product_id'];
                        $show_pname = $data['product_name'];
                        $store_product_quantity = $data['store_product_quantity'];
                        $show_date = $data['store_product_entry_date'];


                        


                    }

                    

                    


          

                ?>

                    


                        <form style="margin-left:10px" action="editStoreProduct.php" method="GET">

                            <div style="margin-top:20px" class="form-group a">
                            
                                <label style="font-weight:bold" for="id" hidden>Product id: </label>
                                <input type="text" class="form-control" name="product_id" value="<?php echo $show_pid;?>" required  hidden>

                            </div>

                            <div style="margin-top:20px" class="form-group a ">

                                <label style="font-weight:bold" for="name"> Product quantity: </label>
                                <input type="text" class="form-control" name="store_product_quantity" value="<?php echo $store_product_quantity;?>" required >

                            </div>


                            <button style="margin-top:20px; width:100px" type="submit" value="submit" class="btn btn-primary">Update</button>

                            <?php

                                if(isset($_GET['product_id'])){

                                    $new_id = $_GET['product_id'];
                                    $new_product_quantity = $_GET['store_product_quantity'];


                                    $sqll = "UPDATE store_product SET  store_product_quantity= '$new_product_quantity' WHERE product_id='$new_id' ";

                                    if($connection->query($sqll) === true){


                                        echo "<h5 style='color:green; font-weight:bold;text-align:center;background-color:rgb(253, 253, 93);color:black;padding:15px'>Category updated successfully...</h5>";


                                        
                                    }
                                    else{
                                        echo "Category update failed....";

                                    }

                                }

                            ?>
                        </form>

                        <!-- Backend code here for adding category -->

                        

                           

                </div>


            </div>

            <!-- Right side end -->



        </div>



        

 
    



    
</body>
</html>
