<?php

require 'tools_Connection.php';
function add_dept_tuple($Dnum,$Dname,$EID) {

    $q1 = "INSERT INTO Department(Dnum,Dname,EID)
           VALUES ('$Dnum','$Dname','$EID')";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
}

function delete_dept_tuple($Dnum) {
    $q1 = "DELETE FROM Department WHERE Dnum='$Dnum'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);

}

function find_dept($Dnum) {
    $q1 = "SELECT * FROM Department WHERE Dnum='$Dnum'";

    $this_link = connectToHealthcare();

    $q_result_find_dept = mysqli_query($this_link, $q1);
    while($row = mysqli_fetch_array($q_result_find_dept)) {
        echo $row['Dnum'] . " " . $row['Dname'] . " " . $row['EID'];
    }

    return $q_result_find_dept;
}

function update_dept_name($Dnum,$new_Dname) {
    $q1 = "UPDATE Department SET Dname='$new_Dname' WHERE Dnum='$Dnum'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
}

function update_dept_number($Dnum,$new_Dnum) {
    $q1 = "UPDATE Department SET Dnum='$new_Dnum' WHERE Dnum='$Dnum'";

    $this_link = connectToHealthcare();

    mysqli_query($this_link, $q1);
}

?>