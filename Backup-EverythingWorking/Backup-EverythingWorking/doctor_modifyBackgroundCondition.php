<?php
    require_once 'queries_Patient.php';
    require_once 'queries_HealthBGCondition.php';

    require_once 'tools_Doctor.php';

    @$submit = $_POST['submit'];

    @$patientID = strip_tags($_POST['patientID']);
    @$conditions = strip_tags($_POST['conditions']);

    if ($submit) {

        if (test_patient_existence($patientID) == 1) {

            $hbID = find_hbID_by_pID($patientID);
            //echo "hbid is: $hbID\n";
            //Need to do something here
//            $old_credentials = find_health_background_by_pID($patientID);

            if ($conditions) {
                update_health_background_condition_condition($hbID, $conditions);
            }

//            $new_credentials = find_health_background_by_pID($patientID);

//            echo "Original patient credentials:\n";
//            while($row = mysqli_fetch_array($old_credentials)) {
//                echo $row['hbID'] . " " . $row['heartRate'] . " " . $row['breathingRate']
//                    . " " . $row['drugs'] . " " . $row['paID'] . "\n";
//            }

//            echo "\n\nNew patient credentials:\n";
//            while($row = mysqli_fetch_array($new_credentials)) {
//                echo $row['hbID'] . " " . $row['heartRate'] . " " . $row['breathingRate']
//                    . " " . $row['drugs'] . " " . $row['paID'] . "\n";
//            }
        }
        else {
            echo "Error: Patient with ID $patientID not found\n";
        }
    }
?>

<html>
<p>
    <form action='doctor_modifyBackgroundCondition.php' method ='POST'>
        <table>
            <!-- rows -->
            <tr>
                <!--Coumln -->
                <td>
                    Patient ID:
                </td>
                <td>
                    <input type='text' name='patientID' value ='<?php echo $patientID; ?>' >
                </td>
            </tr>

            <!-- rows -->
            <tr>
                <!--Coumln -->
                <td>
                    Conditions:
                </td>
                <td>
                    <input type='text' name='conditions' value ='<?php echo $conditions; ?>' >
                </td>
            </tr>
        </table>
<p>
    <input type='submit' name='submit' value='Modify Patient Values'>
    </form>
<p><a href="index.php">Return to index</p>
<p><a href="doctor_home.php">Return to doctor home</p>
</html>