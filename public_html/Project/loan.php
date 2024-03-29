<?php
require(__DIR__ . "/../../partials/nav.php");
/*
    Fa376   
    08/05/2022
    Logic for updating the loan and displaying it onto the transactions sheet
*/
$query = "SELECT APY FROM System_Properties";
$db = getDB();
$stmt = $db->prepare($query);
try {
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $value = $results[0]['APY'];
    // echo var_export($value);
} catch (PDOException $e) {
    flash(var_export($e->errorInfo, true), "danger");
}
/*
    Fa376   
    08/05/2022
    Logic for updating the loan and displaying it onto the transactions sheet
*/
$query = "SELECT account, account_type, balance, active from Bank_Accounts WHERE user_id = :uid and account_type <> :loan AND active = :true";
$db = getDB();
$stmt = $db->prepare($query);
$accounts = [];
try {
    $stmt->execute([":uid" => get_user_id(), ":loan" => "loan", ":true" => "true"]);
    $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if ($r) {
        $accounts = $r;
    }
} catch (PDOException $e) {
    flash(var_export($e->errorInfo, true), "danger");
}

/*
    Fa376   
    08/05/2022
    Logic for updating the loan and displaying it onto the transactions sheet
*/

if (isset($_POST["save"])) {
    $total = se($_POST, "loan", "", false);
    $actual = ($total * ($value / 100)) + $total;
    $accountID = se($_POST, "account", "", false);
    if (strlen($accountID) != 12) {
        flash("Please select an account", "warning");
    } elseif ($actual < 500) {
        flash("Enter a valid amount", "warning");
    } else {
        $accountID = find_account($accountID);  
        $query = "SELECT user_id, active from Bank_Accounts where id = :src";
        $db = getDB();
        $stmt = $db->prepare($query);
        $belongsToUser = true;
        $isActive = true;
        try {
            $stmt->execute([":src" => $accountID]);
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $user_id = get_user_id();
            if ($result) {
                foreach ($result as $r) {
                    if ($r["user_id"] != $user_id) {
                        $belongsToUser = false;
                        break;
                    } elseif ($r["active"] == "false") {
                        $isActive = false;
                        break;
                    }
                }
            }
        } catch (PDOException $e) {
            flash("Technical error: " . var_export($e->errorInfo, true), "danger");
        }
        if (!$belongsToUser) {
            flash("Please select accounts that belong to user", "warning");
        } elseif (!$isActive) {
            flash("Cannot complete transaction as account is closed", "warning");
        } else {
            get_or_create_account("loan", "");
            transaction($total, "loan", -1, get_user_account_id(), "loan");
            transaction($total, "loan", -1, $accountID, "loan");
            die(header('Location: user_accounts.php'));
        }
    }
}


?>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<div class="container">
    <?php if (is_logged_in()) : ?>
        <br>
        <form onsubmit="return validate(this)" method="POST" name="this">
            <div class="row">
                <div class="mb-3 form-group col-md-3">
                    <h2 label class="form-label text-dark" for="da">Loan Amount</h2>
                    <input class="form-control" type="number" input type="number" min="500" step="0.01" name="loan" id="loanAm" required />
                    <small id="minimumLoan" class="form-text text-warning">A loan must be a minimum of $500.00</small>
                </div>

                <div class="mb-3 form-group col-md-3"></div>
                <div class="mb-3 form-group col-md-3">
                    <h2 label class="form-label text-dark" for="apy">APY</h2>
                    <h2 class="bal text-light" id="apy" value="<?php se($value) ?>" name="apy"><?php echo se($value) ?></h2>
                    <h3><span class="text-light" id="total"></span></h3>
                </div>
            </div>
            <div class="mb-3 form-group col-md-3">
                <select class=" btn btn-dark form-select" name="account">
                    <option selected> Select an account to deposit loan into</option>
                    <?php foreach ($accounts as $account) : ?>
                        <li>
                            <option><?php se($account, "account"); ?></option>
                        </li>
                    <?php endforeach; ?>
                </select>
            </div>
            <!-- <input type="submit" class="btn btn-success" value = "See APY" name = "see"></input> -->

            <input type="submit" class="btn btn-success" value="Take out loan" name="save"></input>
        </form>
    <?php endif; ?>
</div>
<script>
    var x = document.getElementsByClassName("bal");
    for (let i of x) {
        let y = i.innerHTML;
        if (y < 0) {
            y *= -1;
        }
        i.innerHTML = parseInt(y) / 10;
        i.innerHTML += "%";
        console.log(i.innerHTML);

    }

    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success
        let b = form.account.value;
        if (b.length != 12) {
            flash("Please select an account", "warning");
            return false;
        }
        return true;
    }

    $("#loanAm").keyup(function() {
        var a = parseInt($('#loanAm').val(), 10);
        var data = <?php echo json_encode($value, JSON_HEX_TAG); ?>;
        var si = a * (data / 1000) + a;
        if (!isNaN(si)) {
            $("#total").show();
            $("#total").text("Balance After 1-Year: $" + si);
        } else {
            $("#total").hide();
        }

    });
    $("#loanAm").click(function() {
        var a = parseInt($('#loanAm').val(), 10);
        var data = <?php echo json_encode($value, JSON_HEX_TAG); ?>;
        var si = a * (data / 1000) + a;
        if (!isNaN(si)) {
            $("#total").show();
            $("#total").text("Balance After 1-Year: $" + si);
        } else {
            $("#total").hide();
        }
    });

</script>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>