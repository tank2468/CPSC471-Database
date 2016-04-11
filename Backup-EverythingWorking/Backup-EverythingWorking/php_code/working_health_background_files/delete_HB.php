<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function delete_health_background_tuple($hbID) {
    $q1 = "DELETE FROM Health_Background WHERE hbID='$hbID'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
}
?>