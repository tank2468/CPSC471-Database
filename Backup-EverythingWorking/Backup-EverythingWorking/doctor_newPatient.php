<?php
require_once 'queries_Patient.php';
require_once 'queries_HealthBG.php';
require_once 'queries_HealthCondition.php';
require_once 'queries_PrimaryContact.php';
require_once 'queries_HealthBGCondition.php';

    @$submit = $_POST['submit'];

    @$firstname = strip_tags($_POST['firstname']);
    @$midname = strip_tags($_POST['midname']);
    @$lastname = strip_tags($_POST['lastname']);
    @$bday = strip_tags($_POST['bday']);
    @$address = strip_tags($_POST['address']);
    @$pnumber = strip_tags($_POST['pnumber']);
    $newID;

    if ($submit) {

        $newID = make_new_patient_ID();
        $newHBID = make_new_healthBG_ID();
        $newHCID = make_new_healthCondition_ID();

        try {

            add_patient_tuple($newID, $firstname, $midname, $lastname, $bday, $address, $pnumber);
            add_health_background_tuple($newHBID, NULL, NULL, NULL, $newID);
            add_health_condition_tuple($newHCID, NULL, $newID);
            add_primary_contact_tuple($newID, '0000000000');
            add_health_bg_condition_tuple(NULL, $newHBID);

        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
            echo "Please try adding patient again\n";
        }

        $test_new_patient = find_patient($newID);
        if (mysqli_num_rows($test_new_patient) > 0) {
            echo "Successfully added new patient\n";
        }
        else {
            echo "Error adding new patient please try again\n";
        }

//        echo "Firstname: $firstname\n";
//        echo "Middlename: $midname\n";
//        echo "Lastname: $lastname\n";
//        echo "BDAY: $bday\n";
//        echo "ADDresss: $address\n";
//        echo "Phone num: $pnumber\n";
//        echo "Patient ID is: $newID\n";
    }
?>


<html>
<p>
    <form action='doctor_newPatient.php' method ='POST'>
        <table>
            <!-- rows -->
            <tr>
                <!--Coumln -->
                <td>
                    First name:
                </td>
                <td>
                    <input type='text' name='firstname' value ='<?php echo $firstname; ?>' >
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    Middle name:
                </td>
                <td>
                    <input type='text' name='midname' value ='<?php echo $midname; ?>' >
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    Last name:
                </td>
                <td>
                    <input type='text' name='lastname' value ='<?php echo $lastname; ?>' >
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    Date of birth:
                </td>
                <td>
                    <input type="date" name="bday" value = '<?php echo $bday; ?>'><br><br>
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    Address:
                </td>
                <td>							   <!-- This line starting from value will prevent users from retyping same info-->
                    <input type='text' name='address' value ='<?php echo $address; ?>' >
                </td>
            </tr>

            <tr>
                <!--Coumln -->
                <td>
                    Phone number:
                </td>
                <td>
                    <input type='text' name='pnumber' value = '<?php echo $pnumber; ?>'>
                </td>
            </tr>
        </table>
<p>
    <input type='submit' name='submit' value='Create New Patient'>
    </form>
<p><a href="index.php">Return to index</p>
<p><a href="doctor_home.php">Return to doctor home</p>
</html>