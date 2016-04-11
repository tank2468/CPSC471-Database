<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function add_employee($Ename,$eID,$eType,$specialty,$labType,$superID) {
    $q1 = "INSERT INTO employee(Ename,eID,eType,specialty,labType,superID)
VALUES ('$Ename','$eID','$eType','$specialty','$labType','$superID')";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
}
?>
