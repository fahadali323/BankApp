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