<?php

require_once 'tools_Connection.php';

function find_health_background_by_pID($paID) {
    $q1 = "SELECT * FROM Health_Background WHERE paID='$paID'";

    $this_link = connectToHealthcare();

    $q_result_find_hb = mysqli_query($this_link, $q1);
    while($row = mysqli_fetch_array($q_result_find_hb)) {
        echo $row['hbID'] . " " . $row['heartRate']
            . " " . $row['breathingRate'] . " " . $row['drugs']
            . " " . $row['paID'];
    }

    return $q_result_find_hb;
}

function find_hbID_by_pID($pID) {
    $q1 = "SELECT * FROM Health_Background WHERE paID='$pID'";
    $this_link = connectToHealthcare();

    $q_result_find_hb = mysqli_query($this_link, $q1);
    $row = mysqli_fetch_array($q_result_find_hb);

    $hbID = $row['hbID'];

    return $hbID;

}

function find_hcID_by_pID($pID) {
    $q1 = "SELECT * FROM health_conditions WHERE ptnID='$pID'";
    $this_link = connectToHealthcare();

    $q_result_find_hc = mysqli_query($this_link, $q1);
    $row = mysqli_fetch_array($q_result_find_hc);

    $hcID = $row['hc_number'];

    return $hcID;

}

//function find_health_condition($hc_number) {
//    $q1 = "SELECT * FROM Health_Conditions WHERE hc_number='$hc_number'";
//
//    $this_link = connectToHealthcare();
//
//    $q_result_find_hc = mysqli_query($this_link, $q1);
//    while($row = mysqli_fetch_array($q_result_find_hc)) {
//        echo $row['hc_number'] . " " . $row['condition_type']
//            . " " . $row['ptnID'];
//    }
//
//    return $q_result_find_hc;
//}

function find_health_condition_by_pID($ptnID) {
    $q1 = "SELECT * FROM Health_Conditions WHERE ptnID='$ptnID'";

    $this_link = connectToHealthcare();

    $q_result_find_hc = mysqli_query($this_link, $q1);
    while($row = mysqli_fetch_array($q_result_find_hc)) {
        echo $row['hc_number'] . " " . $row['condition_type']
            . " " . $row['ptnID'];
    }

    return $q_result_find_hc;
}

function find_primary_contact_by_pID($pID) {
    $q1 = "SELECT * FROM Primary_Contact WHERE pID='$pID'";

    $this_link = connectToHealthcare();

    $q_result_find_pc = mysqli_query($this_link, $q1);
    while($row = mysqli_fetch_array($q_result_find_pc)) {
        echo $row['pID'] . " " . $row['phoneNumber'];
    }

    return $q_result_find_pc;
}
?>