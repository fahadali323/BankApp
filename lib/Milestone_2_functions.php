<?php
function get_balance($accountNumber){
    if(is_logged_in()){
        $query = "SELECT balance FROM Bank_Accounts WHERE account = :account LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try{
            $stmt->execute([":account" => $accountNumber]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result["balance"];
        }catch (PDOException $e){
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
    }
}
function find_account($accountNumber){
    if(is_logged_in()){
        $query = "SELECT id FROM Bank_Accounts WHERE account = :account LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try{
            $stmt->execute([":account" => $accountNumber]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result["id"];
        }catch (PDOException $e){
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
    }
}
function get_user_account_id(){
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        $query = "SELECT id FROM Bank_Accounts WHERE id=(SELECT max(id) FROM Bank_Accounts) and user_id = :uid LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try{
            $stmt->execute([":uid" => get_user_id()]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result["id"];
        }catch (PDOException $e){
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
        //return se($_SESSION["user"]["account"], "id", "", false);
    }
    return "";
}

function refresh_account_balance($accountID)
{
    if (is_logged_in()) {
        $query = "UPDATE Bank_Accounts set balance = (SELECT IFNULL(SUM(diff), 0) from Bank_Account_Transactions WHERE src = :src) where id = :src";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":src" =>$accountID]);
            get_account(); //refresh session data
        } catch (PDOException $e) {
            flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
        }
    }
}
function transaction($money, $typeTrans, $src = -1, $dest = -1, $memo = "")
{
    //I'm choosing to ignore the record of 0 point transactions
        $query = "INSERT INTO Bank_Account_Transactions (src, dest, diff, typeTrans, memo) 
            VALUES (:acs, :acd, :pc, :r,:m), 
            (:acs2, :acd2, :pc2, :r, :m)";
        //I'll insert both records at once, note the placeholders kept the same and the ones changed.
        $params[":acs"] = $src;
        $params[":acd"] = $dest;
        $params[":r"] = $typeTrans;
        $params[":m"] = $memo;
        $params[":pc"] = ($money * -100);
        $params[":acs2"] = $dest;
        $params[":acd2"] = $src;
        $params[":pc2"] = $money *100;
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            //Only refresh the balance of the user if the logged in user's account is part of the transfer
            //this is needed so future features don't waste time/resources or potentially cause an error when a calculation
            //occurs without a logged in user
                refresh_account_balance($dest);
                refresh_account_balance($src);
        } catch (PDOException $e) {
            flash("Transfer error occurred: " . var_export($e->errorInfo, true), "danger");
        }
    
}
function get_random_str($length)
{
    return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 36)), 0, $length);
}
function get_or_create_account($accountType, $money)
{
    if (is_logged_in()) {
        //let's define our data structure first
        //id is for internal references, account_number is user facing info, and balance will be a cached value of activity
        $account = ["id" => -1, "account_number" => false, "balance" => 0];
        //this should always be 0 or 1, but being safe
        $query = "SELECT id, account, balance, account_type from Bank_Accounts where user_id = :uid LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":uid" => get_user_id()]);
            //$result = $stmt->fetch(PDO::FETCH_ASSOC);
                //account doesn't exist, create it
                $created = false;
                //we're going to loop here in the off chance that there's a duplicate
                //it shouldn't be too likely to occur with a length of 12, but it's still worth handling such a scenario

                //you only need to prepare once
                $query = "INSERT INTO Bank_Accounts (account, user_id, account_type) VALUES (:an, :uid, :at)";
                $stmt = $db->prepare($query);
                $user_id = get_user_id(); //caching a reference
                $account_number = "";
                while (!$created) {
                    try {
                        $account_number = get_random_str(12);
                        $stmt->execute([":an" => $account_number, ":uid" => $user_id, ":at" => $accountType]);
                        $created = true;
                        //transaction($money, "deposit", -1, $account_number, ""); 
                        //if we got here it was a success, let's exit
                        flash("Welcome! Your account has been created successfully", "success");
                    } catch (PDOException $e) {
                        $code = se($e->errorInfo, 0, "00000", false);
                        //if it's a duplicate error, just let the loop happen
                        //otherwise throw the error since it's likely something looping won't resolve
                        //and we don't want to get stuck here forever
                        if (
                            $code !== "23000"
                        ) {
                            throw $e;
                        }
                    }
                }
                //loop exited, let's assign the new values
                $account["id"] = $db->lastInsertId();
                $account["account_number"] = $account_number;
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
        $_SESSION["user"]["account"] = $account; //storing the account info as a key under the user session
        //Note: if there's an error it'll initialize to the "empty" definition around line 161

    } else {
        flash("You're not logged in", "danger");
    }
}
function get_system_account(){
    if (is_logged_in()) {
        //let's define our data structure first
        //id is for internal references, account_number is user facing info, and balance will be a cached value of activity
        $account = ["id" => -1, "account_number" => false, "balance" => 0];
        //this should always be 0 or 1, but being safe
        $query = "SELECT id, account, balance from Bank_Accounts where user_id = :uid LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":uid" => -1]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                //$account = $result; //just copy it over
                $account["id"] = $result["id"];
                $account["account_number"] = $result["account"];
                $account["balance"] = $result["balance"];
            
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
        $_SESSION["user"]["account"] = $account; //storing the account info as a key under the user session
        //Note: if there's an error it'll initialize to the "empty" definition around line 161

    } else {
        flash("You're not logged in", "danger");
    } 
}
function get_account()
{
    if (is_logged_in()) {
        //let's define our data structure first
        //id is for internal references, account_number is user facing info, and balance will be a cached value of activity
        $account = ["id" => -1, "account_number" => false, "balance" => 0];
        //this should always be 0 or 1, but being safe
        $query = "SELECT id, account, balance from Bank_Accounts where user_id = :uid LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":uid" => get_user_id()]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
                $account["id"] = $result["id"];
                $account["account_number"] = $result["account"];
                $account["balance"] = $result["balance"]; 
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
        $_SESSION["user"]["account"] = $account; //storing the account info as a key under the user session
        //Note: if there's an error it'll initialize to the "empty" definition around line 161
    } else {
        flash("You're not logged in", "danger");
    }
}