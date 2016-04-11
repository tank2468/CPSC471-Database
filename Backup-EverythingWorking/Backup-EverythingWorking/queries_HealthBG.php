<?php

require_once 'tools_Connection.php';
require_once 'tools_General.php';

function add_health_background_tuple($hbID,$heartRate,$breathingRate,$drugs,$paID) {
    $q1 = "INSERT INTO Health_Background(hbID,heartRate,breathingRate,drugs,paID)
    VALUES ('$hbID','$heartRate','$breathingRate','$drugs','$paID')";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
}

function delete_health_background_tuple($hbID) {
    $q1 = "DELETE FROM Health_Background WHERE hbID='$hbID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
}

function find_health_background($hbID) {
    $q1 = "SELECT * FROM Health_Background WHERE hbID='$hbID'";

    $this_link = connectToHealthcare();

    $q_result_find_hb = mysqli_query($this_link, $q1);
    while($row = mysqli_fetch_array($q_result_find_hb)) {
        echo $row['hbID'] . " " . $row['heartRate'] . " " . $row['breathingRate']
            . " " . $row['drugs'] . " " . $row['paID'];
    }

    return $q_result_find_hb;
}

function update_health_background_breathingRate($hbID,$new_breathingRate) {
    $q1 = "UPDATE Health_Background SET breathingRate='$new_breathingRate' WHERE hbID='$hbID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function update_health_background_drugs($hbID,$new_drugs) {
    $q1 = "UPDATE Health_Background SET drugs='$new_drugs' WHERE hbID='$hbID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function update_health_background_id($hbID,$new_hbID) {
    $q1 = "UPDATE Health_Background SET hbID='$new_hbID' WHERE hbID='$hbID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function update_health_background_heartRate($hbID,$new_heartRate) {
    $q1 = "UPDATE Health_Background SET heartRate='$new_heartRate' WHERE hbID='$hbID'";

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

function make_new_healthBG_ID() {
    $newID = random_number(10);

    $check_existence = find_patient($newID);

    //Patient ID already exists
    if (mysqli_num_rows($check_existence) > 0) {
        $newID = random_number(10);
    }

    return $newID;
}

function test_healthBG_existence($hbgID) {
    $healthBG_check = find_health_background($hbgID);
    if (mysqli_num_rows($healthBG_check) > 0) {
        return 1;
    }
    else {
        return 0;
    }
}

?>