<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function add_patient_tuple($id,$Fname,$Mname,$Lname,$DOB,$address,$phoneNumber) {
    
    $q1 = "INSERT INTO Patient(id,Fname,Mname,Lname,DOB,address,phoneNumber)
VALUES ('$id', '$Fname','$Mname','$Lname','$DOB','$address','$phoneNumber')";
    
    $this_link = connect();

    $result = mysqli_query($this_link, $q1);
    
    if ($result) {
        echo "Success!";
    }
    if (!$result) {
        echo "Failure??";
    }
}
?>
