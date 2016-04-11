<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function update_patient_Fname($id,$new_Fname) {
    $q1 = "UPDATE Patient SET Fname='$new_Fname' WHERE id='$id'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>
