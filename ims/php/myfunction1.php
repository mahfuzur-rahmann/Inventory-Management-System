<?php
function data_list($table_name,$column1,$column2){
    require "../backEndCode/databaseConnection.php" ;
    $sql3 = "SELECT * FROM $table_name ";
    $query_3 = $connection->query($sql3);
    while($data3 =  mysqli_fetch_array($query_3)){
    
    $data_id = $data3[$column1];
    $data_name = $data3[$column2];

    echo " <option value = '$data_id'> $data_name</option>";
    }
}

?>