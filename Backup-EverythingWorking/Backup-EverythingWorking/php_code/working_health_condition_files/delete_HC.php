<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function delete_health_condition_tuple($hc_number) {
    $q1 = "DELETE FROM Health_Conditions WHERE hc_number='$hc_number'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
}
?>
