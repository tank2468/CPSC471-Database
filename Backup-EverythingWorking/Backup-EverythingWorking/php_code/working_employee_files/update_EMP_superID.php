<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

        
require 'connection.php';
function update_superID($eID,$new_superID) {
    $q1 = "UPDATE employee SET superID='$new_superID' WHERE eID='$eID'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>

