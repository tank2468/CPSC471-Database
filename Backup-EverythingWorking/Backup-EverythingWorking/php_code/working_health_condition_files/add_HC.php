<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function add_health_condition_tuple($hc_number,$condition_type) {
    $q1 = "INSERT INTO Health_Conditions(hc_number,condition_type)
VALUES ('$hc_number','$condition_type')";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
}
?>
