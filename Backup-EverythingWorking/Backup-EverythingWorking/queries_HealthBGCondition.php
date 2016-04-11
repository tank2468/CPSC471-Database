<?php

require_once 'tools_Connection.php';

function add_health_bg_condition_tuple($conditions, $hbID) {

    $q1 = "INSERT INTO health_background_conditions(conditions, hbID)
           VALUES ('$conditions', '$hbID')";

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

function delete_health_background_condition_tuple($hbID) {
    $q1 = "DELETE FROM health_background_conditions WHERE hbID='$hbID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
}

function update_health_background_condition_condition($hbID,$new_bgCondition) {
    $q1 = "UPDATE health_background_conditions SET conditions='$new_bgCondition' WHERE hbID='$hbID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function find_health_bg_condition($hbID) {
    $q1 = "SELECT * FROM health_background_conditions WHERE hbID='$hbID'";

    $this_link = connectToHealthcare();

    $q_result_find_health_bg_condition = mysqli_query($this_link, $q1);
//    while($row = mysqli_fetch_array($q_result_find_patient)) {
//        echo $row['id'] . " " . $row['Fname'] . " " . $row['Mname']
//            . " " . $row['Lname'] . " " . $row['DOB']
//            . " " . $row['address'] . " " . $row['phoneNumber'];
//    }

    mysqli_close($this_link);
    return $q_result_find_health_bg_condition;
}
?>