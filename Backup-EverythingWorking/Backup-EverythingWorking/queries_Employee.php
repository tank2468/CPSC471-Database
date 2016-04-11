<?php

require 'tools_Connection.php';
function add_employee($Ename,$eID,$eType,$specialty,$labType,$superID) {
    $q1 = "INSERT INTO employee(Ename,eID,eType,specialty,labType,superID)
VALUES ('$Ename','$eID','$eType','$specialty','$labType','$superID')";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
}

function delete_employee($eID) {
    $q1 = "DELETE FROM employee WHERE eID='$eID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
}

function find_health_background($eID) {
    $q1 = "SELECT * FROM Health_Background WHERE hbID='$eID'";

    $this_link = connectToHealthcare();

    $q_result_find_hb = mysqli_query($this_link, $q1);
    while($row = mysqli_fetch_array($q_result_find_hb)) {
        echo $row['Ename'] . " " . $row['eID'] . " " . $row['eType']
            . " " . $row['specialty'] . " " . $row['labType'] . " " . $row['superID'];
    }

    return $q_result_find_hb;
}

function update_eID($eID,$new_EMPID) {
    $q1 = "UPDATE employee SET eID='$new_EMPID' WHERE eID='$eID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function update_Ename($eID,$new_Ename) {
    $q1 = "UPDATE employee SET Ename='$new_Ename' WHERE eID='$eID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function update_EMP_eType($eID,$new_eType) {
    $q1 = "UPDATE employee SET eType='$new_eType' WHERE eID='$eID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function update_EMP_labType($eID,$new_labType) {
    $q1 = "UPDATE employee SET labType='$new_labType' WHERE eID='$eID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function update_specialty($eID,$new_specialty) {
    $q1 = "UPDATE employee SET specialty='$new_specialty' WHERE eID='$eID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function update_superID($eID,$new_superID) {
    $q1 = "UPDATE employee SET superID='$new_superID' WHERE eID='$eID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

?>