<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<?php

if(isset($_POST["save"])){
    $accountType = se($_POST, "radio", null, false);
    $depositAmount = se($_POST, "deposit", "", false);

    transaction($depositAmount, "deposit", -1, get_user_id(), "");
    get_or_create_account($accountType, $depositAmount);
    die(header("Location: user_accounts.php"));  
}
?>
<div class="container-fluid">
<?php if (is_logged_in()) : ?>
    <form onsubmit="return validate(this)" method="POST">
        <div class="form-check">
                <input class="form-check-input" type="radio" name="radio" value = "checking" id="checking" checked>
                <label class="form-check-label" for="Checking">
                    Checking
                </label>
        </div>
        <div class="form-check">
                <input class="form-check-input" type="radio" name="radio" value = "savings" id="savings">
                <label class="form-check-label" for="Savings">
                    Savings
                </label>
        </div>
            <div class="mb-3 form-group col-md-3">
                    <h2 label class="form-label text-dark" for="da">Deposit</h2>
                    <input class="form-control" type="number" input type="number" min="5.00" step="0.01"  name="deposit"  id="da" />
                    <small id="minimumDeposit"  class="form-text text-warning">A minimum deposit of $5.00 must be made.</small>

            </div>
            <input type="submit" class="btn btn-success" value = "Create Account" name = "save"></input>
    </form>
    <?php endif; ?>
</div>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>


<?php
require(__DIR__ . "/../../partials/flash.php");
?>