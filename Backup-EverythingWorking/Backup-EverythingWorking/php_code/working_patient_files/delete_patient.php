<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function delete_patient_tuple($id) {
    $q1 = "DELETE FROM Patient WHERE id='$id'";
    
    $this_link = connect();

    mysqli_query($this_link, $q1);
   
}
?>
