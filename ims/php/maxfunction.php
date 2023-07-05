<?php
function data_list3($table_name,$column){
    require "../backEndCode/databaseConnection.php" ;
    $sql3 = "SELECT count($column) FROM $table_name ";
    $query_3 = $connection->query($sql3);
    $data3 =  mysqli_fetch_array($query_3);

    return $data3[0];


    

}

?>