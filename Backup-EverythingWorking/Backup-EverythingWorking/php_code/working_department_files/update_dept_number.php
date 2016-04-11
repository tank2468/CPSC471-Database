<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function update_dept_number($Dnum,$new_Dnum) {
    $q1 = "UPDATE Department SET Dnum='$new_Dnum' WHERE Dnum='$Dnum'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
   
}
?>