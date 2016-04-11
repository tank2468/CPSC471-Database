<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function add_health_background_tuple($hbID,$heartRate,$breathingRate,$drugs,$paID) {
    $q1 = "INSERT INTO Health_Background(hbID,heartRate,breathingRate,drugs,paID)
VALUES ('$hbID','$heartRate','$breathingRate','$drugs','$paID')";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
}
?>
