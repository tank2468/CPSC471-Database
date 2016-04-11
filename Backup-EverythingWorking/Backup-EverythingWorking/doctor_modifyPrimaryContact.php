<?php
    require_once 'queries_Patient.php';
    require_once 'queries_HealthBGCondition.php';

    require_once 'tools_Doctor.php';

    @$submit = $_POST['submit'];

    @$patientID = strip_tags($_POST['patientID']);
    @$phoneNumber = strip_tags($_POST['phoneNumber']);

    if ($submit) {

        if (test_patient_existence($patientID) == 1) {

            $hbID = find_hbID_by_pID($patientID);
            //echo "hbid is: $hbID\n";
            //Need to do something here
//            $old_credentials = find_health_background_by_pID($patientID);

            if ($phoneNumber) {
                update_primary_contact_phoneNumber($patientID, $phoneNumber);
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
    <form action='doctor_modifyPrimaryContact.php' method ='POST'>
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
                    Primary Contact Phone Number:
                </td>
                <td>
                    <input type='text' name='phoneNumber' value ='<?php echo $phoneNumber; ?>' >
                </td>
            </tr>
        </table>
<p>
    <input type='submit' name='submit' value='Modify Patient Values'>
    </form>
<p><a href="index.php">Return to index</p>
<p><a href="doctor_home.php">Return to doctor home</p>
</html>