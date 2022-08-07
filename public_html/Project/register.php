<?php
require(__DIR__ . "/../../partials/nav.php");
reset_session();
$email = se($_POST, "email", "", false);
$username = se($_POST, "username", "", false);
$password = se($_POST, "password", "", false);
$confirm = se($_POST, "confirm", "", false);

$first = get_user_first();
$last = get_user_last();
?>
<div class="container-fluid">
    <h1>Register</h1>
    <form onsubmit="return validate(this)" method="POST">
        <div class="mb-3 form-group col-md-4">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" id="email" name="email" 
            required value= "<?php se($email); ?>" />
        </div>
        <div class="mb-3 form-group col-md-4">
            <label class="form-label" for="username">Username</label>
            <input class="form-control" type="text" name="username" required maxlength="30" required value = "<?php se($username); ?>"/>
        </div>
        <div class ="row">
        <div class="mb-3 form-group col-md-4">
            <label class="form-label" for="first">First Name</label>
            <input class="form-control" type="text" name="firstName" id="first" value = "<?php se($first); ?>"/>
        </div>
        <div class="mb-3 form-group col-md-4">
            <label class="form-label" for="last">Last Name</label>
            <input class="form-control" type="text" name="lastName" id="last" value = "<?php se($last); ?>"/>
        </div>
        <div class ="row">
        <div class="mb-3 form-group col-md-4">
            <label class="form-label" for="pw">Password</label>
            <input class="form-control" type="password" id="pw" name="password" required minlength="8" required value = "<?php se($password); ?>"/>
        </div>
        <div class="mb-3 form-group col-md-4">
            <label class="form-label" for="confirm">Confirm</label>
            <input class="form-control" type="password" name="confirm" required minlength="8" required value = "<?php se($confirm); ?>"/>
        </div>
        <input type="submit" class="mt-3 btn btn-success" value="Register" />
    </form>
</div>
<script>
    function validate(form) {
        //TODO 1: implement JavaScript validation
        //ensure it returns false for an error and true for success

        return true;
    }
</script>
<?php
//TODO 2: add PHP Code
if (isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm"]) && isset($_POST["firstName"]) && isset($_POST["lastName"])) {
    $email = se($_POST, "email", "", false);
    $password = se($_POST, "password", "", false);
    $first = se($_POST, "firstName", null, false);
    $last = se($_POST, "lastName", null, false);
    $confirm = se(
        $_POST,
        "confirm",
        "",
        false
    );
    $username = se($_POST, "username", "", false);
    //TODO 3
    $hasError = false;
    if (empty($email)) {
        flash("Email must not be empty", "danger");
        $hasError = true;
    }
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!preg_match('/^[a-z0-9_-]{3,16}$/i', $username)) {
        flash("Username must only be alphanumeric and can only contain - or _", "danger");
        $hasError = true;
    }
    if (empty($password)) {
        flash("password must not be empty", "danger");
        $hasError = true;
    }
    if (empty($confirm)) {
        flash("Confirm password must not be empty", "danger");
        $hasError = true;
    }
    if(strlen($first) > 25 || strlen($last) > 25){
        flash("First name or last name length must be less than 25 characters", "danger");
        $hasError = true;
    }
    if(!preg_match('/^[a-zA-Z]+$/', $first)){
        flash("First name must be alphabetical", "danger");
        $hasError = true;
    }
    if (strlen($password) < 8) {
        flash("Password too short", "danger");
        $hasError = true;
    }
    if (
        strlen($password) > 0 && $password !== $confirm
    ) {
        flash("Passwords must match", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        //TODO 4
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO Users (email, password, username, firstName, lastName) VALUES(:email, :password, :username, :firstName, :lastName)");
        try {
            $stmt->execute([":email" => $email, ":password" => $hash, ":username" => $username, ":firstName" => $first, ":lastName" => $last]);
            flash("Successfully registered!");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
    }
}
?>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>