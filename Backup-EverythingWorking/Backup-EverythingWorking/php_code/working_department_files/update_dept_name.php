<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function update_dept_name($Dnum,$new_Dname) {
    $q1 = "UPDATE Department SET Dname='$new_Dname' WHERE Dnum='$Dnum'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
   
}
?>