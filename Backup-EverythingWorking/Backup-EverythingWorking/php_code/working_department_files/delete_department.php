<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function delete_dept_tuple($Dnum) {
    $q1 = "DELETE FROM Department WHERE Dnum='$Dnum'";
    
    $this_link = connect();

    mysqli_query($this_link, $q1);
   
}
?>
