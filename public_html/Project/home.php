<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<?php
if (is_logged_in()) {
   // echo "Welcome home, " . get_username();
    //comment this out if you don't want to see the session variables
   // echo "<pre>" . var_export($_SESSION, true) . "</pre>";
   $t = update_APY();
   echo var_export($t);
} 
?>
<div class = "container-fluid">
<?php if (is_logged_in()) : ?>
        <h1>Welcome home, <?php echo get_username(); ?> </h1>
        <?php endif; ?>
    <div class = "col">
         <div class = "col">
        <?php if (is_logged_in()) : ?>
            <a class="button" href="<?php echo get_url('account.php'); ?>"  style= color:antiquewhite; role="button">Create Account</a>
            <a class="button2" href="<?php echo get_url('user_accounts.php'); ?>"  style= color:antiquewhite; role="button">My Accounts</a> 
            <a class="button3" href="<?php echo get_url('deposit.php'); ?>" style= color:antiquewhite; role="button" role="button">Deposit</a>
            <a class="button4" href="<?php echo get_url('withdraw.php'); ?>" style= color:antiquewhite; role="button">Withdraw</a>
            <a class="button5" href="<?php echo get_url('transfer.php'); ?>" style= color:antiquewhite; role="button">Transfer</a>
            <a class="button6" href="<?php echo get_url('transferfunds.php'); ?>" style= color:antiquewhite; ="button">Transfer To Another User</a>
            <a class="button7" href="<?php echo get_url('profile.php'); ?>" style= color:antiquewhite; role="button">Profile</a>    
        <?php endif; ?>
    </div>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>