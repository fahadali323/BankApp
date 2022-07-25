<?php
function pagination_filter($newPage){
    $_GET["page"] = $newPage;
    return se(http_build_query($_GET));
}
function get_user_first()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "firstName", "", false);
    }
    return "";
}
function get_user_last()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "lastName", "", false);
    }
    return "";
}
function get_last_name_id($last){
    $query = "SELECT id FROM Users WHERE lastName = :lastName LIMIT 1" ;
    $db = getDB();
    $stmt = $db->prepare($query);
    try{
        $stmt->execute([":lastName" => $last]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if($result){
            return $result["id"];
        }
        else{
            return "none";
        }
        
        //echo var_export($userID);
    }catch (PDOException $e){
        flash("Technical error: " . var_export($e->errorInfo, true), "danger");
    }
}