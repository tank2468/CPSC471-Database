<?php
/**
 * Created by PhpStorm.
 * User: Nathan
 * Date: 11/26/2015
 * Time: 9:44 AM
 */

$link = mysqli_connect("localhost", "nathan", "DiscoDan", "healthcare_users", 3306);
echo "I'm in the healthcare users test";
if (!$link) {
    echo "Could not connect";
}
if ($link) {
    echo "Connection success!!";
}

?>