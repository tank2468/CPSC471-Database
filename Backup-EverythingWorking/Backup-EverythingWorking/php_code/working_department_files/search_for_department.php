<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function find_dept($Dnum) {
    $q1 = "SELECT * FROM Department WHERE Dnum='$Dnum'";
    
    $this_link = connect();
    
    $q_result_find_dept = mysqli_query($this_link, $q1);
        while($row = mysqli_fetch_array($q_result_find_dept)) {
            echo $row['Dnum'] . " " . $row['Dname'] . " " . $row['EID'];
        }
    
    return $q_result_find_dept;
}
?>