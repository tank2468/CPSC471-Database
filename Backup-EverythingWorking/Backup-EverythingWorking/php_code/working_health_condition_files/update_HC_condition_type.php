<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function update_health_condition_type($hc_number,$new_hc_type) {
    $q1 = "UPDATE Health_Conditions SET hc_type='$new_hc_type' WHERE hc_number='$hc_number'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>
