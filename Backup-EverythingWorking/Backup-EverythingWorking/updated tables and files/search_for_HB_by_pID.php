<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function find_health_background_by_pID($paID) {
    $q1 = "SELECT * FROM Health_Background WHERE paID='$paID'";
    
    $this_link = connectToHealthcare();
    
    $q_result_find_hb = mysqli_query($this_link, $q1);
        while($row = mysqli_fetch_array($q_result_find_hb)) {
            echo $row['hbID'] . " " . $row['heartRate']
                     . " " . $row['breathingRate'] . " " . $row['drugs']
                    . " " . $row['paID'];
        }
    
    return $q_result_find_hb;
}
?>
