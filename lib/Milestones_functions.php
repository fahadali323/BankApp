<?php
require_once(__DIR__ . "/db.php");
$BASE_PATH = '/Project/'; //This is going to be a helper for redirecting to our base project path since it's nested in another folder

function get_visi($email)
{
    if (is_logged_in()) {
        $query = "SELECT visibility FROM Users WHERE email = :email LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":email" => $email]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result["visibility"];
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
    }
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

function get_balance($accountNumber)
{
    if (is_logged_in()) {
        $query = "SELECT balance FROM Bank_Accounts WHERE account = :account LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":account" => $accountNumber]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result["balance"];
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
    }
}
function close_account($ID)
{
    if (is_logged_in()) {
        $db = getDB();
        $query = "UPDATE Bank_Accounts set active = :false WHERE id = :id";
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":false" => "false", ":id" => $ID]);
        } catch (PDOException $e) {
            flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
        }
    }
}

function find_account($accountNumber)
{
    if (is_logged_in()) {
        $query = "SELECT id FROM Bank_Accounts WHERE account = :account LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":account" => $accountNumber]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result["id"];
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
    }
}
function get_last_name_id($last)
{
    $query = "SELECT id FROM Users WHERE lastName = :lastName LIMIT 1";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":lastName" => $last]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
            return $result["id"];
        } else {
            return "none";
        }
    } catch (PDOException $e) {
        flash("Technical error: " . var_export($e->errorInfo, true), "danger");
    }
}
function get_user_account_id()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        $query = "SELECT id FROM Bank_Accounts WHERE id=(SELECT max(id) FROM Bank_Accounts) and user_id = :uid LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":uid" => get_user_id()]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result["id"];
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
    }
    return "";
}

function pagination_filter($newPage)
{
    $_GET["page"] = $newPage;
    return se(http_build_query($_GET));
}

function refresh_account_balance($accountID)
{
    if (is_logged_in()) {
        $query = "UPDATE Bank_Accounts set balance = (SELECT IFNULL(SUM(diff), 0) from Bank_Account_Transactions WHERE src = :src) where id = :src";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":src" => $accountID]);
            //get_account(); //refresh session data
        } catch (PDOException $e) {
            flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
        }
    }
}
function update_APY()
{
    $query = "SELECT account, ID, created, balance, updated, active FROM Bank_Accounts where user_id = :ID AND account_type = :savings OR account_type = :loan AND active = :true";

    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":ID" => get_user_id(), ":savings" => "savings", ":loan" => "loan", ":true" => "true"]);
        $result = $stmt->fetchALL(PDO::FETCH_ASSOC);
        $queryAPY = "SELECT APY from System_Properties WHERE APY = :APY";
        $stmt = $db->prepare($queryAPY);
        try {
            $stmt->execute([":APY" => 1]);
            $APY = $stmt->fetch(PDO::FETCH_ASSOC);
            $APY = $APY["APY"];
            $APY = $APY / 1000;
            //$date = date('Y-m-d H:i:s');
            $date1 = date_create();
            foreach ($result as $r) {
                $date2 = date_create($r["created"]);
                $diff = date_diff($date2, $date1, true);
                $offset = ceil($diff->d / 30);
                if ($r["updated"] == NULL) {
                    if ($offset % 30 == 0 && $offset != 0) {
                        $interest = (($APY / 12) * $r["balance"] / 100) * 100;
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
                } else {
                    $date3 = date_create($r["updated"]);
                    $updatedDiff = date_diff($date3, $date1, true);
                    if ($updatedDiff->d != 0) {
                        if ($offset % 30 == 0 && $offset != 0) {
                            $interest = (($APY / 12) * $r["balance"] / 100) * 100;
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
            }
        } catch (PDOException $e) {
            flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
        }
    } catch (PDOException $e) {
        flash("Error refreshing account: " . var_export($e->errorInfo, true), "danger");
    }
}

function transaction($money, $typeTrans, $src = -1, $dest = -1, $memo = "")
{
    $query = "INSERT INTO Bank_Account_Transactions (src, dest, diff, typeTrans, memo) 
            VALUES (:acs, :acd, :pc, :r,:m), 
            (:acs2, :acd2, :pc2, :r, :m)";
    $params[":acs"] = $src;
    $params[":acd"] = $dest;
    $params[":r"] = $typeTrans;
    $params[":m"] = $memo;
    $params[":pc"] = ($money * -100);
    $params[":acs2"] = $dest;
    $params[":acd2"] = $src;
    $params[":pc2"] = $money * 100;
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute($params);
        refresh_account_balance($dest);
        refresh_account_balance($src);
        flash("Successful transaction", "success");
    } catch (PDOException $e) {
        flash("Transfer error occurred: " . var_export($e->errorInfo, true), "danger");
    }
}
function get_random_str($length)
{
    return substr(str_shuffle(str_repeat('0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', 36)), 0, $length);
}
function create_account_admin($accountType, $user)
{
    if (is_logged_in()) {
        $account = ["id" => -1, "account_number" => false, "balance" => 0];
        //this should always be 0 or 1, but being safe
        $query = "SELECT id, account, balance, account_type from Bank_Accounts where user_id = :uid LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":uid" => $user]);
            $created = false;
            $query = "INSERT INTO Bank_Accounts (account, user_id, account_type) VALUES (:an, :uid, :at)";
            $stmt = $db->prepare($query);
            $user_id = get_user_id(); //caching a reference
            $account_number = "";
            while (!$created) {
                try {
                    $account_number = get_random_str(12);
                    $stmt->execute([":an" => $account_number, ":uid" => $user, ":at" => $accountType]);
                    $created = true;
                } catch (PDOException $e) {
                    $code = se($e->errorInfo, 0, "00000", false);
                    if (
                        $code !== "23000"
                    ) {
                        throw $e;
                    }
                }
            }
            $account["id"] = $db->lastInsertId();
            $account["account_number"] = $account_number;
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
        $_SESSION["user"]["account"] = $account; //storing the account info as a key under the user session
    } else {
        flash("You're not logged in", "danger");
    }
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
            $created = false;
            $query = "INSERT INTO Bank_Accounts (account, user_id, account_type) VALUES (:an, :uid, :at)";
            $stmt = $db->prepare($query);
            $user_id = get_user_id(); //caching a reference
            $account_number = "";
            while (!$created) {
                try {
                    $account_number = get_random_str(12);
                    $stmt->execute([":an" => $account_number, ":uid" => $user_id, ":at" => $accountType]);
                    $created = true;
                    if ($accountType == "loan") {
                        flash("Your loan account has been opened");
                    } else {
                        flash("Welcome! Your account has been created successfully", "success");
                    }
                } catch (PDOException $e) {
                    $code = se($e->errorInfo, 0, "00000", false);
                    if (
                        $code !== "23000"
                    ) {
                        throw $e;
                    }
                }
            }
            $account["id"] = $db->lastInsertId();
            $account["account_number"] = $account_number;
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
        $_SESSION["user"]["account"] = $account;
    } else {
        flash("You're not logged in", "danger");
    }
}
function get_system_account()
{
    if (is_logged_in()) {
        $account = ["id" => -1, "account_number" => false, "balance" => 0];
        $query = "SELECT id, account, balance from Bank_Accounts where user_id = :uid LIMIT 1";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":uid" => -1]);
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $account["id"] = $result["id"];
            $account["account_number"] = $result["account"];
            $account["balance"] = $result["balance"];
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
        $_SESSION["user"]["account"] = $account; //storing the account info as a key under the user session
    } else {
        flash("You're not logged in", "danger");
    }
}
function get_account()
{
    if (is_logged_in()) {
        $account = ["id" => -1, "account_number" => false, "balance" => 0];
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
        $_SESSION["user"]["account"] = $account; 
    } else {
        flash("You're not logged in", "danger");
    }
}
