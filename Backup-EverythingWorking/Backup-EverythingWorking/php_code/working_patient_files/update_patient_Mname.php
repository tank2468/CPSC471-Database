<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function update_patient_Mname($id,$new_Mname) {
    $q1 = "UPDATE Patient SET Mname='$new_Mname' WHERE id='$id'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);
    
}
?>

