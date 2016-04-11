<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function delete_primary_contact_tuple($pID,$phoneNumber) {
    $q1 = "DELETE FROM Primary_Contact WHERE pID='$pID' AND phoneNumber='$phoneNumber'";
    
    $this_link = connect();

    mysqli_query($this_link, $q1);
   
}
?>
