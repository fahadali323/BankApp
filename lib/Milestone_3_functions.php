<?php
function pagination_filter($newPage){
    $_GET["page"] = $newPage;
    return se(http_build_query($_GET));
}