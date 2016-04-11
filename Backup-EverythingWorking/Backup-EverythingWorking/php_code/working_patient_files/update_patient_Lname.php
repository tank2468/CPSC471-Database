<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function update_patient_Lname($id,$new_Lname) {
    $q1 = "UPDATE Patient SET Lname='$new_Lname' WHERE id='$id'";
    
    $this_link = connect();
    
    mysqli_query($this_link, $q1);

}
?>
