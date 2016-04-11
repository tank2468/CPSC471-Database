<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function find_primary_contact_by_pID($pID) {
    $q1 = "SELECT * FROM Primary_Contact WHERE pID='$pID'";
    
    $this_link = connect();
    
    $q_result_find_pc = mysqli_query($this_link, $q1);
        while($row = mysqli_fetch_array($q_result_find_pc)) {
            echo $row['pID'] . " " . $row['phoneNumber'];
        }
    
    return $q_result_find_pc;
}
?>
