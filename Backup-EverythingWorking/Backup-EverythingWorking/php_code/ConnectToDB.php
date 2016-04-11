<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 11/26/2015
 * Time: 9:44 AM
 */

function connectToDB() {
    $link = mysqli_connect("localhost", "nathan", "DiscoDan", "healthcare", 3306);
    echo "I'm here";
    if (!$link) {
        echo "Could not connect";
    }
    if ($link) {
        echo "Connection success!!";
    }
    return $link;
}

?>