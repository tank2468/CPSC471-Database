<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function update_patient_id($id,$new_id) {
    $q1 = "UPDATE Patient SET id='$new_id' WHERE id='$id'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
   
}
?>
