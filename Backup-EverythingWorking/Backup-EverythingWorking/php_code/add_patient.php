<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */
function add_patient_tuple($id,$Fname,$Mname,$Lname,$DOB,$address,$phoneNumber) {
    $q1 = "INSERT INTO Patient(id,Fname,Mname,Lname,DOB,address,phoneNumber)
VALUES ($id,$Fname,$Mname,$Lname,$DOB,$address,$phoneNumber)";
    
    $q_result_add_tuple = mysqli_query(include'$link', $q1);
    
    return $q_result_add_tuple;
}
?>
