<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function add_dept_tuple($Dnum,$Dname,$EID) {
    
    $q1 = "INSERT INTO Department(Dnum,Dname,EID)
VALUES ('$Dnum','$Dname','$EID')";
    
    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
  
}
?>
