<?php
function connectToUsers() {
    $link = mysqli_connect("localhost", "nathan", "DiscoDan", "healthcare_users", 3306);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $link;
}

function connectToHealthcare() {
    $link = mysqli_connect("localhost", "nathan", "DiscoDan", "healthcare", 3306);

    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    return $link;
}

?>