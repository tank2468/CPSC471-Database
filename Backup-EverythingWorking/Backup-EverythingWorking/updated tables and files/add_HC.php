<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function add_health_condition_tuple($hc_number,$condition_type,$ptnID) {
    $q1 = "INSERT INTO Health_Conditions(hc_number,condition_type,ptnID)
VALUES ('$hc_number','$condition_type','$ptnID')";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
}
?>
