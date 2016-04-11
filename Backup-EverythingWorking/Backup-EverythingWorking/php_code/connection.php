<?php

function connect() {
    $link = mysqli_connect("localhost", "phpuser", "phpuserpw", "phpbook", 8889);
        
    if ($link) {
        echo "Connection success!!\n";
    }
    if (!$link) {
        echo "Something is wrong?\n";
    }
    
    return $link;
}

?>

