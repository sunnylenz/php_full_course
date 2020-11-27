<?php 

//for subjects

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

function create_new_subject($subject){
    global $db;

    $errors = validate_subject($subject);
   if(!empty($errors)){
       return $errors;
   }

    $sql = "insert into subjects ";
    $sql .="(menu_name, position, visible) ";
    $sql .="values (";
    $sql .="'" . $subject['menu_name'] . "',";
    $sql .="'" . $subject['position'] . "',";
    $sql .="'" . $subject['visible'] . "'";
    $sql .=")";
    $result = mysqli_query($db, $sql); // for insert statement, result is true or false

if ($result) {
    return true;
}else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}

}

function update_subject($subject){

    global $db;

   $errors = validate_subject($subject);
   if(!empty($errors)){
       return $errors;
   }

    $sql = "update subjects set ";
    $sql .="menu_name='" . $subject['menu_name'] . "',";
    $sql .="position='" . $subject['position'] . "',";
    $sql .="visible='" . $subject['visible'] . "' ";
    $sql .="where id='" . $subject['id'] . "' ";
    $sql .="limit 1";


    $result = mysqli_query($db,$sql);// update statements,results are true or false
    if ($result) {
        return true;
    }else {
    echo mysqli_error($db);
    $db_disconnect($db);
    exit; 
}
}

function delete_subject($id){
    global $db;
    $sql = "delete from subjects ";
    $sql .="where id= '" . $id . "' ";
    $sql .="limit 1";
    echo $sql;

    $result = mysqli_query($db,$sql);

    // for delete statemnets, $result is true or false
    if($result){
       return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

function validate_subject($subject){
    $errors = [];

    // menu_name
    if(is_blank($subject['menu_name'])){
        $errors[] = "Name canot be blank.";
    }
    if(!has_length($subject['menu_name'], ['min' => 2, 'max' => 255])){
        $errors[] = "Name must be between 2 and 225 characters.";
    }
    //position
    //make sure we are working with an integer

    $position_int = (int) $subject['position'];
    if($position_int <= 0){
        $errors[] = "Position must be greater than zero";
    }
    if($position_int > 999){
        $errors[] = "position must be less than 999.";
    }

    //visible
    // make sure we are working with a string
    $visible_str = (string) $subject['visible'];
    if(!has_inclusion_of($visible_str, ["0","1"])){
        $errors[] = "Visible must be true or false.";
    }
    return $errors;
}


// for pages

function find_all_pages(){
    global $db;
    $sql = "select * from pages ";
    $sql .= "order by subject_id asc";
    $result = mysqli_query($db, $sql);
    confirm_result_set($result);
    return $result;
}

function find_page_by_id($id){
    global $db;
    $sql = "select * from pages ";
    $sql .= "where id='" . db_escape($id) ."'";
    $result = mysqli_query($db, $sql);
    // echo $sql;
    confirm_result_set($result);
    $page = mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $page; // returns an assoc array

}

function insert_page($page){
    global $db;

    $errors = validate_page($page);
    if(!empty($errors)){
        return $errors;
    }
    $sql = "insert into subjects ";
    $sql .="(menu_name, position, visible, content) ";
    $sql .="values (";
    $sql .="'" . $page['subject_id'] . "',";
    $sql .="'" . $page['menu_name'] . "',";
    $sql .="'" . $page['position'] . "',";
    $sql .="'" . $page['visible'] . "',";
    $sql .="'" . $page['content'] . "'";
    $sql .=")";
    $result = mysqli_query($db, $sql); // for insert statement, result is true or false

if ($result) {
    return true;
}else {
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}

}


function update_page($page){

    global $db;

    $errors = validate_page($page);
    if(!empty($errors)){
        return $errors;
    }

    $sql = "update pages set ";
    $sql .="subject_id='" . $page['subject_id'] . "',";
    $sql .="menu_name='" . $page['menu_name'] . "',";
    $sql .="position='" . $page['position'] . "',";
    $sql .="visible='" . $page['visible'] . "',";
    $sql .="content='" . $page['content'] . "' ";
    $sql .="where id='" . $page['id'] . "' ";
    $sql .="limit 1";


    $result = mysqli_query($db,$sql);// update statements,results are true or false
    if ($result) {
        return true;
    }else {
    echo mysqli_error($db);
    $db_disconnect($db);
    exit; 
}
}


function delete_page($id){
    global $db;
    $sql = "delete from pages ";
    $sql .="where id= '" . $id . "' ";
    $sql .="limit 1";
    echo $sql;

    $result = mysqli_query($db,$sql);

    // for delete statemnets, $result is true or false
    if($result){
       return true;
    } else {
        echo mysqli_error($db);
        db_disconnect($db);
        exit;
    }
}

function validate_page($page){
    $errors = [];

    // subject_id
    if(is_blank($page['subject_id'])){
        $errors[] = "Subject cannot be Blank.";
    }

    // menu_name
    if(is_blank($page['menu_name'])){
        $errors[] = "Name canot be blank.";
    }
    if(!has_length($page['menu_name'], ['min' => 2, 'max' => 255])){
        $errors[] = "Name must be between 2 and 225 characters.";
    }
    //position
    //make sure we are working with an integer

    $position_int = (int) $page['position'];
    if($position_int <= 0){
        $errors[] = "Position must be greater than zero";
    }
    if($position_int > 999){
        $errors[] = "position must be less than 999.";
    }

    //visible
    // make sure we are working with a string
    $visible_str = (string) $page['visible'];
    if(!has_inclusion_of($visible_str, ["0","1"])){
        $errors[] = "Visible must be true or false.";
    }

    // content
    if(is_blank($page['content'])){
        $errors[] = "Content cannot be blank";
    }
    
    return $errors;
}

function find_pages_by_subject_id($subject_id){
    global $db;
    $sql = "select * from pages ";
    $sql .= "where subject_id='" . db_escape($db, $subject_id) ."' ";
    $sql .= "order by position asc";
    $result = mysqli_query($db, $sql);
    // echo $sql;
    confirm_result_set($result);
    return $result; // returns an assoc array

}



?>