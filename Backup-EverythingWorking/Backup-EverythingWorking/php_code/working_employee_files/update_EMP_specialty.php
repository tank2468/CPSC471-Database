<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

        
require 'connection.php';
function update_specialty($eID,$new_specialty) {
    $q1 = "UPDATE employee SET specialty='$new_specialty' WHERE eID='$eID'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>

