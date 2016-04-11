<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function update_health_condition_number($hc_number,$new_hc_number) {
    $q1 = "UPDATE Health_Conditions SET hc_number='$new_hc_number' WHERE hc_number='$hc_number'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>
