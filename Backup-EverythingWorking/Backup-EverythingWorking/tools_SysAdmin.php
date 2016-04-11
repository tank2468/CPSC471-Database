<?php

require 'tools_Connection.php';

function changeUserGroup($username, $usergroup) {
    $link = connectToUsers();

    $test_user = mysqli_query($link, "SELECT * FROM Users WHERE Username='$username'");
    if (mysqli_num_rows($test_user) == 0) {
        mysqli_close($link);
        return "Failure: $username does not exist in database";
    }

    //User exists in db
    if (mysqli_num_rows($test_user) > 0) {
        $update_q = "UPDATE Users
                     SET Usergroup = '$usergroup'
                     WHERE Username='$username'";
        $result = mysqli_query($link, $update_q);
    }

    mysqli_close($link);
    return "Success: $username changed to usergroup $usergroup\n";
}

function removeUser($username) {
    $link = connectToUsers();

    $test_user = mysqli_query($link, "SELECT * FROM Users WHERE Username='$username'");

    if (mysqli_num_rows($test_user) > 0) {
        $rem_q = "DELETE FROM Users WHERE Username='$username'";
        mysqli_query($link, $rem_q);
        mysqli_close($link);
        return "Success: Deleted $username from database\n";
    }

    mysqli_close($link);
    return "Failure: Username $username not found in database\n";
}

?>
