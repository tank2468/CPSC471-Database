<?php
    require_once 'queries_Patient.php';
    require_once 'queries_HealthCondition.php';
    require_once 'tools_Doctor.php';
    @$submit = $_POST['submit'];

    @$patientID = strip_tags($_POST['patientID']);
    @$conditionType = strip_tags($_POST['conditionType']);

    if ($submit) {

        if (test_patient_existence($patientID) == 1) {

            $hcID = find_hcID_by_pID($patientID);

            //Need to do something here
//            $old_credentials = find_health_condition_by_pID($patientID);

            if ($conditionType) {
                update_health_condition_type($hcID, $conditionType);
            }

//            $new_credentials = find_health_condition_by_pID($patientID);

//            echo "Original patient credentials:\n";
//            while($row = mysqli_fetch_array($old_credentials)) {
//                echo $row['hc_number'] . " " . $row['condition_type'] . " " . $row['ptnID'] . "\n";
//            }
//
//            echo "\n\nNew patient credentials:\n";
//            while($row = mysqli_fetch_array($new_credentials)) {
//                echo $row['hc_number'] . " " . $row['condition_type'] . " " . $row['ptnID'] . "\n";
//            }
        }
        else {
            echo "Error: Patient with ID $patientID not found\n";
        }
    }
?>

<html>
<p>
    <form action='labTech_modifyCondition.php' method ='POST'>
        <table>
            <!-- rows -->
            <tr>
                <!--Coumln -->
                <td>
                    Patient ID
                </td>
                <td>
                    <input type='text' name='patientID' value ='<?php echo $patientID; ?>' >
                </td>
            </tr>
            <!-- rows -->
            <tr>
                <!--Coumln -->
                <td>
                    Health Condition Type:
                </td>
                <td>
                    <input type='text' name='conditionType' value ='<?php echo $conditionType; ?>' >
                </td>
            </tr>
        </table
<p>
    <input type='submit' name='submit' value='Modify Patient Values'>
    </form>
<p><a href="index.php">Return to index</p>
<p><a href="labTech_home.php">Return to lab technician home</p>
</html>