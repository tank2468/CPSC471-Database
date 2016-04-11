<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

        
        
require 'connection.php';
function update_EMP_labType($eID,$new_labType) {
    $q1 = "UPDATE employee SET labType='$new_labType' WHERE eID='$eID'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>

