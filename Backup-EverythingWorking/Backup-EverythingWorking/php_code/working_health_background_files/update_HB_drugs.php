<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function update_health_background_drugs($hbID,$new_drugs) {
    $q1 = "UPDATE Health_Background SET drugs='$new_drugs' WHERE hbID='$hbID'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>