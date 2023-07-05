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
    <title>IMS - Add category</title>

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
    color: rgb(129, 85, 2); margin-left: 5px; font-weight:bold;text-decoration:underline;">Add new category: </h3>
                    


                        <form style="margin-left:10px" action="addCategory.php">
                            <div style="margin-top:20px" class="form-group">

                                <label style="font-weight:bold" for="email">Category name; </label>
                                <input type="text" class="form-control" name="category_name" required>

                            </div>

                            <div style="margin-top:20px " class="form-group">

                                <label style="font-weight:bold" for="pwd">Entry date:</label>
                                <input type="date" class="form-control" name="category_entry_date" required >

                            </div>

                            <button style="margin-top:20px; width:100px" type="submit" value="submit" class="btn btn-primary">Add</button>
                        </form>

                        <!-- Backend code here for adding category -->

                        <?php

                            include "../backEndCode/databaseConnection.php" ;


                            if(isset($_GET['category_name'])){

                                $category_name =  $_GET['category_name'];
                                $category_entry_date =  $_GET['category_entry_date'];

                                $sql_2 = "SELECT category_name FROM category WHERE category_name='$category_name' ";

                                    $query_2 = $connection->query($sql_2);

                                    if($query_2->num_rows>0){
                                        echo '<script type="text/javascript">alert("Category already exsist");</script>';
                                    
                                    }
                                    else{
                                        $sql  ="INSERT INTO category (category_name,category_entry_date) VALUES ('$category_name', '$category_entry_date')";

                                        if($connection->query($sql) === true){



                                            echo "<h5 style='color:green; font-weight:bold;text-align:center;background-color:rgb(253, 253, 93);color:black;padding:15px'>Category inserted successfully...</h5>";
                                        }
                                        else{
                                            echo "Category inserted failed....";
                                    
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