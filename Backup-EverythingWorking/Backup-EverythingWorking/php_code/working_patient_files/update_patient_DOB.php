<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function update_patient_DOB($id,$new_DOB) {
    $q1 = "UPDATE Patient SET DOB='$new_DOB' WHERE id='$id'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>

