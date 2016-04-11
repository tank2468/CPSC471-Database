<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function find_health_condition($hc_number) {
    $q1 = "SELECT * FROM Health_Conditions WHERE hc_number='$hc_number'";
    
    $this_link = connect();
    
    $q_result_find_hc = mysqli_query($this_link, $q1);
        while($row = mysqli_fetch_array($q_result_find_hc)) {
            echo $row['hc_number'] . " " . $row['condition_type']
                     . " " . $row['ptnID'];
        }
    
    return $q_result_find_hc;
}
?>
