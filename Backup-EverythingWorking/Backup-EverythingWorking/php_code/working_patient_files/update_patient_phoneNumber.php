<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function update_patient_phoneNumber($id,$new_phoneNumber) {
    $q1 = "UPDATE Patient SET phoneNumber='$new_phoneNumber' WHERE id='$id'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>

