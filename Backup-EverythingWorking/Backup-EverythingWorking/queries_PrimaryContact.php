<?php

require_once 'tools_Connection.php';

function add_primary_contact_tuple($pID, $phoneNumber) {

    $q1 = "INSERT INTO primary_contact(pID, phoneNumber)
           VALUES ('$pID', '$phoneNumber')";

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

function update_primary_contact_phoneNumber($pID,$new_phoneNumber) {
    $q1 = "UPDATE primary_contact SET phoneNumber='$new_phoneNumber' WHERE pID='$pID'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function delete_primary_contact_tuple($id) {
    $q1 = "DELETE FROM primary_contact WHERE pID='$id'";
//    $q1 = "DELETE FROM Patient
//           WHERE PrimaryKey = $id";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
    mysqli_close($this_link);

}

function find_primaryContact($pID) {
    $q1 = "SELECT * FROM primary_contact WHERE pID='$pID'";

    $this_link = connectToHealthcare();

    $q_result_find_primaryContact = mysqli_query($this_link, $q1);
//    while($row = mysqli_fetch_array($q_result_find_patient)) {
//        echo $row['id'] . " " . $row['Fname'] . " " . $row['Mname']
//            . " " . $row['Lname'] . " " . $row['DOB']
//            . " " . $row['address'] . " " . $row['phoneNumber'];
//    }

    mysqli_close($this_link);
    return $q_result_find_primaryContact;
}
?>