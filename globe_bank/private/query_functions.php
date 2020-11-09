<?php 
function find_all_subjects(){
    global $db;
    $sql = "select * from subjects ";
    $sql .= "order by position asc";
    // a good check will be echoing the sql
    //echo $sql;
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_all_pages(){
    global $db;
    $sql = "select * from pages ";
    $sql .= "order by subject_id asc";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_subject_by_id($id){
    global $db;
    $sql = "select * from subjects ";
    $sql .= "where id='" . $id ."'";
    $result = mysqli_query($db, $sql);
    // echo $sql;
    confirm_result_set($result);
    $subject = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $subject; // returns an assoc array

}

?>