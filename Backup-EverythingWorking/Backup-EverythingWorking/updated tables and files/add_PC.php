<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 01/12/2015
 */

require 'connection.php';
function add_primary_contact_tuple($pID,$phoneNumber) {
    
    $q1 = "INSERT INTO Primary_Contact(pID,phoneNumber)
VALUES ('$pID','$phoneNumber')";
    
    $this_link = connect();

    mysqli_query($this_link, $q1);
  
}
?>