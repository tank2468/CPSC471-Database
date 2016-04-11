<?php
    require_once 'queries_Patient.php';
    require_once 'queries_HealthBG.php';
    require_once 'tools_Doctor.php';

    @$submit = $_POST['submit'];

    @$patientID = strip_tags($_POST['patientID']);
    @$heartRate = strip_tags($_POST['heartRate']);
    @$breathingRate = strip_tags($_POST['breathingRate']);
    @$drugs = strip_tags($_POST['drugs']);

    if ($submit) {

        if (test_patient_existence($patientID) == 1) {

            $hbID = find_hbID_by_pID($patientID);

            //Need to do something here
//            $old_credentials = find_health_background_by_pID($patientID);

            if ($heartRate) {
                update_health_background_heartRate($hbID, $heartRate);
            }
            if ($breathingRate) {
                update_health_background_breathingRate($hbID, $breathingRate);
            }
            if ($drugs) {
                update_health_background_drugs($hbID, $drugs);
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
    <form action='doctor_modifyBackground.php' method ='POST'>
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
                    Heart Rate:
                </td>
                <td>
                    <input type='text' name='heartRate' value ='<?php echo $heartRate; ?>' >
                </td>
            </tr>


            <tr>
                <!--Coumln -->
                <td>
                    Breathing Rate:
                </td>
                <td>
                    <input type='text' name='breathingRate' value ='<?php echo $breathingRate; ?>' >
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    Drugs:
                </td>
                <td>
                    <input type='text' name='drugs' value ='<?php echo $drugs; ?>' >
                </td>
            </tr>
        </table>
<p>
    <input type='submit' name='submit' value='Modify Patient Values'>
    </form>
<p><a href="index.php">Return to index</p>
<p><a href="doctor_home.php">Return to doctor home</p>
</html>