<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function update_patient_address($id,$new_address) {
    $q1 = "UPDATE Patient SET address='$new_address' WHERE id='$id'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>

