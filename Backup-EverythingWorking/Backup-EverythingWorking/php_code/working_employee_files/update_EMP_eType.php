<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function update_EMP_eType($eID,$new_eType) {
    $q1 = "UPDATE employee SET eType='$new_eType' WHERE eID='$eID'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>

