<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function update_health_background_heartRate($hbID,$new_heartRate) {
    $q1 = "UPDATE Health_Background SET heartRate='$new_heartRate' WHERE hbID='$hbID'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>