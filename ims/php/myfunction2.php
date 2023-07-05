<?php
function data_list2($table_name,$find,$column1,$column2){
    require "../backEndCode/databaseConnection.php" ;
    $sql3 = "SELECT $find FROM $table_name WHERE $column1 ='$column2' ";
    $query_3 = $connection->query($sql3);
    while($data3 =  mysqli_fetch_array($query_3)){

    $data_name = $data3[$find];

    return $data_name;

    }
}

?>