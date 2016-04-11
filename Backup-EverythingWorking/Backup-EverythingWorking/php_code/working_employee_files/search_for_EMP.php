<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function find_health_background($eID) {
    $q1 = "SELECT * FROM Health_Background WHERE hbID='$eID'";
    
    $this_link = connect();
    
    $q_result_find_hb = mysqli_query($this_link, $q1);
        while($row = mysqli_fetch_array($q_result_find_hb)) {
            echo $row['Ename'] . " " . $row['eID'] . " " . $row['eType']
                    . " " . $row['specialty'] . " " . $row['labType'] . " " . $row['superID'];
        }
    
    return $q_result_find_hb;
}
?>