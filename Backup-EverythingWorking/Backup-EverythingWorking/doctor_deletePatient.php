<?php
    //require 'tools_Doctor.php';
    require 'queries_Patient.php';

    @$submit = $_POST['submit'];
    @$patientID = strip_tags($_POST['patientID']);


    //FOR SOME REASON, I CAN'T DELETED PATIENT WITH ID 123456789 (John M Black)
    if ($submit) {
        $pexist = test_patient_existence($patientID);
        if (test_patient_existence($patientID) == 1) {
            delete_patient_tuple($patientID);

            $pexist = test_patient_existence($patientID);
            if ($pexist == 0) {
                echo "Patient with id $patientID successfully deleted\n";
            }
            if ($pexist == 1) {
                echo "Error: Patient found but not deleted\n";
            }
        }
        else {
            echo "Error: No patient in database with id $patientID\n";
        }
    }
?>

<html>
<h1>Delete Patient</h1>
<p>
    <form action='doctor_deletePatient.php' method ='POST'>
        <table>
            <!-- rows -->

                <!--Column -->
                <td>
                    patient ID:
                </td>
                <td>
                    <input type='text' name='patientID' value ='<?php echo $patientID; ?>' >
                </td>

    <input type='submit' name='submit' value='Delete'>
    </form>
</p>
<p><a href="index.php">Return to index</p>
<p><a href="doctor_home.php">Return to doctor home</p>
</html>