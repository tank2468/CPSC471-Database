<?php
    require_once 'queries_Patient.php';
    @$submit = $_POST['submit'];

    @$patientID = strip_tags($_POST['patientID']);
    @$new_patientID = strip_tags($_POST['new_patientID']);
    @$firstname = strip_tags($_POST['firstname']);
    @$midname = strip_tags($_POST['midname']);
    @$lastname = strip_tags($_POST['lastname']);
    @$bday = strip_tags($_POST['bday']);
    @$address = strip_tags($_POST['address']);
    @$pnumber = strip_tags($_POST['pnumber']);

    if ($submit) {

        if (test_patient_existence($patientID) == 1) {

//            $old_credentials = find_patient($patientID);

            if ($new_patientID) {
                update_patient_id($patientID, $new_patientID);
                $patientID = $new_patientID;
            }
            if ($firstname) {
                update_patient_Fname($patientID, $firstname);
            }
            if ($midname) {
                update_patient_Mname($patientID, $midname);
            }
            if ($lastname) {
                update_patient_Lname($patientID, $lastname);
            }
            if ($bday) {
                update_patient_DOB($patientID, $bday);
            }
            if ($address) {
                update_patient_address($patientID, $address);
            }
            if ($pnumber) {
                update_patient_phoneNumber($patientID, $pnumber);
            }

//            $new_credentials = find_patient($patientID);
//
//            echo "Original patient credentials:\n";
//            while($row = mysqli_fetch_array($old_credentials)) {
//                echo $row['id'] . " " . $row['Fname'] . " " . $row['Mname']
//                    . " " . $row['Lname'] . " " . $row['DOB']
//                    . " " . $row['address'] . " " . $row['phoneNumber'];
//            }
//
//            echo "\n\nNew patient credentials:\n";
//            while($row = mysqli_fetch_array($new_credentials)) {
//                echo $row['id'] . " " . $row['Fname'] . " " . $row['Mname']
//                    . " " . $row['Lname'] . " " . $row['DOB']
//                    . " " . $row['address'] . " " . $row['phoneNumber'];
//            }

        }
        else {
            echo "Error: Patient with ID $patientID not found\n";
        }


    }
?>

<html>
<p>
    <form action='doctor_modifyInformation.php' method ='POST'>
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
                    New patient ID:
                </td>
                <td>
                    <input type='text' name='new_patientID' value ='<?php echo $new_patientID; ?>' >
                </td>
            </tr>


            <tr>
                <!--Coumln -->
                <td>
                    New first name:
                </td>
                <td>
                    <input type='text' name='firstname' value ='<?php echo $firstname; ?>' >
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    New middle name:
                </td>
                <td>
                    <input type='text' name='midname' value ='<?php echo $midname; ?>' >
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    New last name:
                </td>
                <td>
                    <input type='text' name='lastname' value ='<?php echo $lastname; ?>' >
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    New date of birth:
                </td>
                <td>
                    <input type="date" name="bday" value = '<?php echo $bday; ?>'><br><br>
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    New address:
                </td>
                <td>							   <!-- This line starting from value will prevent users from retyping same info-->
                    <input type='text' name='address' value ='<?php echo $address; ?>' >
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    New phone number:
                </td>
                <td>
                    <input type='text' name='pnumber' value = '<?php echo $pnumber; ?>'>
                </td>
            </tr>
        </table>
<p>
    <input type='submit' name='submit' value='Modify Patient Values'>
    </form>
<p><a href="index.php">Return to index</p>
<p><a href="doctor_home.php">Return to doctor home</p>
</html>