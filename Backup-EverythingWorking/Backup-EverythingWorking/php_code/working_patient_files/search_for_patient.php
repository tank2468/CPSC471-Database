<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

require 'connection.php';
function find_patient($id) {
    $q1 = "SELECT * FROM Patient WHERE id='$id'";
    
    $this_link = connect();
    
    $q_result_find_patient = mysqli_query($this_link, $q1);
        while($row = mysqli_fetch_array($q_result_find_patient)) {
            echo $row['id'] . " " . $row['Fname'] . " " . $row['Mname']
                    . " " . $row['Lname'] . " " . $row['DOB'] 
                    . " " . $row['address'] . " " . $row['phoneNumber'];
        }
    
    return $q_result_find_patient;
}
?>
