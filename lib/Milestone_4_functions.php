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
function update_APY(){
    $query = "SELECT account, ID, created, balance, updated FROM Bank_Accounts where user_id = :ID AND account_type = :savings";
    $db = getDB();
    $stmt = $db->prepare($query);
    try{
        $stmt->execute([":ID" => get_user_id(), ":savings" => "savings"]);
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
        $queryAPY = "SELECT APY from System_Properties WHERE APY = :APY";
        $stmt = $db->prepare($queryAPY);
        try{
            $stmt->execute([":APY" => 1]);
            $APY = $stmt->fetch(PDO::FETCH_ASSOC);
            $APY = $APY["APY"];
            $APY = $APY/1000;
            //$date = date('Y-m-d H:i:s');
            $date1 = date_create();
            foreach($result as $r){
                $date2 = date_create($r["created"]);
                $diff = date_diff($date2,$date1, true);
                $offset = ceil($diff->d/30);
                if($r["updated"] == NULL){
                    if($offset%30 == 0 && $offset != 0){
                        $interest = (($APY/12) * $r["balance"]/100)*100;
                        transaction($interest, "transfer", -1, $r["ID"], "interest");
                        //$updatedBalance = $interest + $r["balance"]*100;
                        $query = "UPDATE Bank_Accounts set updated = :updated WHERE ID = :id";
                        $db = getDB();
                        $stmt = $db->prepare($query);
                        try {
                            $stmt->execute([":updated" => $date1->format('Y-m-d'), ":id" => $r["ID"]]);
                        } catch (PDOException $e) {
                            flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
                        }
                    }
                }else{
                    $date3 = date_create($r["updated"]);
                    $updatedDiff = date_diff($date3,$date1, true);
                    if($updatedDiff->d != 0){
                        if($offset%30 == 0 && $offset != 0){
                            $interest = (($APY/12) * $r["balance"]/100)*100;
                            transaction($interest, "transfer", -1, $r["ID"], "interest");
                            //$updatedBalance = $interest + $r["balance"];
                            $query = "UPDATE Bank_Accounts set updated = $date1 WHERE id = :id";
                            $db = getDB();
                            $stmt = $db->prepare($query);
                            try {
                                $stmt->execute([":id" => $r["id"]]);
                                
                            } catch (PDOException $e) {
                                flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
                            }
                    }
                }
                }
                //echo var_export($offset);
                //echo var_export($r["created"]);
                
                
            }
        }catch (PDOException $e) {
            flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
        }
    }catch (PDOException $e) {
        flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
    }
} 