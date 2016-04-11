<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function delete_employee($eID) {
    $q1 = "DELETE FROM employee WHERE eID='$eID'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
}
?>