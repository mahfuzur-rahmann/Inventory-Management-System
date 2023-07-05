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
    <title>IMS - View category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <link rel="stylesheet" href="../css/afterLoginNavBar.css">
    <link rel="stylesheet" href="../css/admin_deshboard.css">

    <script src="https://kit.fontawesome.com/45b272e4b0.js" crossorigin="anonymous"></script>

    <style>
        table, th, td {
            border: 1px solid;
            padding: 15px;
            border-collapse: collapse;
            border-width: 2px;
            text-align: center;
        }
    </style>
    
</head>
<body>
        <?php include "afterLoginNavBar.php"; ?>

        <div class="main_div">

            <div style="margin-top:10px" class="left_side">
                <?php include "leftSideSheared.php"; ?>
            </div>


        
            <!-- Right side start -->

            <div   class="right_side">

            <h3 style="margin-top: 10px; 
    color: rgb(129, 85, 2); margin-left: 5px; font-weight:bold;text-decoration:underline;">Category table: </h3>

            <table style="margin:30px">
                <tr>
                    <th>Category Id</th>
                    <th>Category name</th>
                    <th>Entry date</th>
                    <th>Action</th>
                </tr>

                <?php
                    include "../backEndCode/databaseConnection.php";

                    $sql = "SELECT * FROM category";
                

                    $query = $connection->query($sql);
                    while($data = mysqli_fetch_array($query)){
                        $show_id = $data['category_id'];
                        $show_name = $data['category_name'];
                        $show_date = $data['category_entry_date'];
                        echo "<tr><td>$show_id</td><td>$show_name</td><td>$show_date</td>
                        <td><a href='editCategory.php?name=$show_name'>Edit</a></td></tr>";

                    }

                ?>
                
            </table>

            

                
                




            </div>

            <!-- Right side end -->



        </div>



        

 
    



    
</body>
</html>