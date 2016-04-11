<?php

require_once 'tools_Connection.php';
require_once 'tools_General.php';
require_once 'tools_Doctor.php';

require_once 'queries_PrimaryContact.php';
//patient middle name
require_once 'queries_HealthBGCondition.php';
require_once 'queries_HealthCondition.php';
require_once 'queries_HealthBG.php';

function add_patient_tuple($id,$Fname,$Mname,$Lname,$DOB,$address,$phoneNumber) {

    $q1 = "INSERT INTO Patient(id,Fname,Mname,Lname,DOB,address,phoneNumber)
           VALUES ('$id', '$Fname','$Mname','$Lname','$DOB','$address','$phoneNumber')";

    $this_link = connectToHealthcare();

    $result = mysqli_query($this_link, $q1);

//    if ($result) {
//        echo "Success!";
//    }
//    if (!$result) {
//        echo "Failure??";
//    }
    mysqli_close($this_link);
}

//Re-writing this to delete everything else first
function delete_patient_tuple($id) {

    $hcID = find_hcID_by_pID($id);
    $hbID = find_hbID_by_pID($id);

    delete_primary_contact_tuple($id);
    delete_health_background_condition_tuple($hbID);
    delete_health_condition_tuple($hcID);
    delete_health_background_tuple($hbID);

    $q1 = "DELETE FROM Patient WHERE id='$id'";
//    $q1 = "DELETE FROM Patient
//           WHERE PrimaryKey = $id";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
    mysqli_close($this_link);

}

function dump_all_patient_info($id) {
    $hcID = find_hcID_by_pID($id);
    $hbID = find_hbID_by_pID($id);

    $primary_contact = find_primary_contact_by_pID($id);
    $health_bg_conditions = find_health_bg_condition($hbID);
    $health_condition = find_health_condition($hcID);
    $health_bg = find_health_background($hbID);
    $this_patient = find_patient($id);

    var_dump($this_patient);
    var_dump($health_bg);
    var_dump($health_bg_conditions);
    var_dump($health_condition);
    var_dump($primary_contact);

    return;

}

//function delete_patient_tuple($id) {
//    $q1 = "DELETE FROM Patient WHERE id='$id'";
////    $q1 = "DELETE FROM Patient
////           WHERE PrimaryKey = $id";
//
//    $this_link = connectToHealthcare();
//
//    mysqli_query($this_link, $q1);
//    mysqli_close($this_link);
//
//}



function find_patient($id) {
    $q1 = "SELECT * FROM Patient WHERE id='$id'";

    $this_link = connectToHealthcare();

    $q_result_find_patient = mysqli_query($this_link, $q1);
//    while($row = mysqli_fetch_array($q_result_find_patient)) {
//        echo $row['id'] . " " . $row['Fname'] . " " . $row['Mname']
//            . " " . $row['Lname'] . " " . $row['DOB']
//            . " " . $row['address'] . " " . $row['phoneNumber'];
//    }

    mysqli_close($this_link);
    return $q_result_find_patient;
}

function update_patient_address($id,$new_address) {
    $q1 = "UPDATE Patient SET address='$new_address' WHERE id='$id'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
    mysqli_close($this_link);

}

function update_patient_DOB($id,$new_DOB) {
    $q1 = "UPDATE Patient SET DOB='$new_DOB' WHERE id='$id'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
    mysqli_close($this_link);

}

function update_patient_id($id,$new_id) {
    $q1 = "UPDATE Patient SET id='$new_id' WHERE id='$id'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
    mysqli_close($this_link);

}

function update_patient_Fname($id,$new_Fname) {
    $q1 = "UPDATE Patient SET Fname='$new_Fname' WHERE id='$id'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
    mysqli_close($this_link);

}

function update_patient_Lname($id,$new_Lname) {
    $q1 = "UPDATE Patient SET Lname='$new_Lname' WHERE id='$id'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
    mysqli_close($this_link);

}

function update_patient_Mname($id,$new_Mname) {
    $q1 = "UPDATE Patient SET Mname='$new_Mname' WHERE id='$id'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
    mysqli_close($this_link);

}

function update_patient_phoneNumber($id,$new_phoneNumber) {
    $q1 = "UPDATE Patient SET phoneNumber='$new_phoneNumber' WHERE id='$id'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
    mysqli_close($this_link);

}

//function random_number($length) {
//
//    $rand_num = '';
//    for ($i = 0; $i < $length; $i++) {
//        $rand_num .= mt_rand(0, 9);
//    }
//
//    return $rand_num;
//}

function make_new_patient_ID() {
    $newID = random_number(9);

    $check_existence = find_patient($newID);

    //Patient ID already exists
    if (mysqli_num_rows($check_existence) > 0) {
        $newID = random_number(9);
    }

    return $newID;
}

function test_patient_existence($pID) {
    $patient_check = find_patient($pID);
    if (mysqli_num_rows($patient_check) > 0) {
        return 1;
    }
    else {
        return 0;
    }
}
?>