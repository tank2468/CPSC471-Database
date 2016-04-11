<?php

require_once 'tools_Connection.php';

function add_health_condition_tuple($hc_number,$condition_type,$pID) {
    $q1 = "INSERT INTO Health_Conditions(hc_number,condition_type,ptnID)
           VALUES ('$hc_number','$condition_type', '$pID')";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
}

function delete_health_condition_tuple($hc_number) {
    $q1 = "DELETE FROM Health_Conditions WHERE hc_number='$hc_number'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
}

function find_health_condition($hc_number) {
    $q1 = "SELECT * FROM Health_Conditions WHERE hc_number='$hc_number'";

    $this_link = connectToHealthcare();

    $q_result_find_hc = mysqli_query($this_link, $q1);
    while($row = mysqli_fetch_array($q_result_find_hc)) {
        echo $row['hc_number'] . " " . $row['condition_type'];
    }

    return $q_result_find_hc;
}

function update_health_condition_type($hc_number,$new_hc_type) {
    $q1 = "UPDATE Health_Conditions SET condition_type='$new_hc_type' WHERE hc_number='$hc_number'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function update_health_condition_number($hc_number,$new_hc_number) {
    $q1 = "UPDATE Health_Conditions SET hc_number='$new_hc_number' WHERE hc_number='$hc_number'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

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

function make_new_healthCondition_ID() {
    $newID = random_number(10);

    $check_existence = find_patient($newID);

    //Patient ID already exists
    if (mysqli_num_rows($check_existence) > 0) {
        $newID = random_number(10);
    }

    return $newID;
}

function test_healthCondition_existence($hcID) {
    $healthCondition_check = find_patient($hcID);
    if (mysqli_num_rows($healthCondition_check) > 0) {
        return 1;
    }
    else {
        return 0;
    }
}

?>