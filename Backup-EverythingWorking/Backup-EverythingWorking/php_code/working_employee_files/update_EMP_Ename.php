<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

        
require 'connection.php';
function update_Ename($eID,$new_Ename) {
    $q1 = "UPDATE employee SET Ename='$new_Ename' WHERE eID='$eID'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>

