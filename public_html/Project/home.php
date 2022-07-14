<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<!-- <h1>Home</h1> -->
<?php
if (is_logged_in()) {
   // echo "Welcome home, " . get_username();
    //comment this out if you don't want to see the session variables
   // echo "<pre>" . var_export($_SESSION, true) . "</pre>";
} 
?>
<div class = "container-fluid">
<?php if (is_logged_in()) : ?>
        <h1>Welcome home, <?php echo get_username(); ?> </h1>
        <?php endif; ?>
    <div class = "col">
        <?php if (is_logged_in()) : ?>
            <a class="button" href="<?php echo get_url('account.php'); ?>" role="button">Create Account</a>
            <a class="button2" href="<?php echo get_url('user_accounts.php'); ?>" role="button">My Accounts</a> 
            <a class="button3 " href="#" role="button">Deposit</a>
            <a class="button4 " href="#" role="button">Withdraw</a>
            <a class="button5 " href="#" role="button">Transfer</a>
            <a class="button6 " href="<?php echo get_url('profile.php'); ?>" role="button">Profile</a>
        <?php endif; ?>
    </div>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?> 