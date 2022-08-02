<?php
function get_visi($email){
    if(is_logged_in()){
        $query = "SELECT visibility FROM Users WHERE email = :email LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try{
            $stmt->execute([":email" => $email]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result["visibility"];
        }catch (PDOException $e){
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
    }
}