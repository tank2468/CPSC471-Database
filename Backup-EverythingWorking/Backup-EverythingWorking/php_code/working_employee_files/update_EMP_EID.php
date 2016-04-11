<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function update_eID($eID,$new_EMPID) {
    $q1 = "UPDATE employee SET eID='$new_EMPID' WHERE eID='$eID'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
   
}
?>