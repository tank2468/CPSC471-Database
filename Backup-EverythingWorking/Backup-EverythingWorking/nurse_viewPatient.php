

<html>
<h1>View Patient Records</h1>
<p>
    <form action='nurse_viewPatient.php' method ='POST'>
        <body>
            <?php
require 'queries_Patient.php';

    @$submit = $_POST['submit'];
    @$patientID = strip_tags($_POST['username']);

    if ($submit) {
        @$patientID = strip_tags($_POST['patientID']);

        if (test_patient_existence($patientID) == 1){
            //$records = find_patient($patientID);

            //In this function (found in queries_Patient.php), I'm getting all the data from the tables based on pID
            //and then sort of printing them by using var_dump.
            //TODO: Need to find a better way to print this to screen... format it properly in HTML
           // dump_all_patient_info($patientID);
           $pat_array5 = mysqli_fetch_array(find_patient($patientID));
           $pat_array6 = mysqli_fetch_array(find_health_background_by_pID($patientID));
           $pat_array7 = mysqli_fetch_array(find_health_condition_by_pID($patientID));
           

//            while($row = mysqli_fetch_array($records)) {
//            echo $row['id'] . "  " . $row['Fname'] . " " . $row['Mname']
//                . " " . $row['Lname'] . " " . $row['DOB']
//                . " " . $row['address'] . " " . $row['phoneNumber'];
//            }
        }
        else {
            echo "Error: Patient with ID: $patientID not found\n";
        }
       
    }else {
        $pat_array5 = array(" ", " ", " ", " ", " ", " ", " ", " ", " ", "  "
        , " ", " ", " ", " ", " ");
     $pat_array6 = array(" ", " ", " ", " ", " ", " ", " ", " ", " ", "  "
        , " ", " ", " ", " ", " ");
     $pat_array7 = array(" ", " ", " ", " ", " ", " ", " ", " ", " ", "  "
        , " ", " ", " ", " ", " ");
    }
?>
        <table>
            <!-- rows -->

                <!--Column -->
                <td>
                    Patient ID:
                </td>
                <td>
                    <input type='text' name='patientID' value ='<?php echo $patientID; ?>' > <input type='submit' name='submit' value='View'>
                </td>
        </table>
         
            <table border = 2>
                <tr>
                            <th>Patient's id    </th>
                            <th>Patient's Fname    </th>
                            <th>Patient's Mname    </th>
                            <th>Patient's Lname     </th>
                            <th>Patient's DOB     </th>
                            <th>Patient's address     </th>
                            <th>Patient's phoneNumber     </th>
                             <th>Patient's hbID    </th>
                            <th>Patient's heartRate     </th>
                            <th>Patient's BreathingRate     </th>
                            <th>Patient's Drugs     </th>
                           <th>Patient's condition Type     </th>
                        </tr>
                          <tr>
                          <th><?php echo $pat_array5[0] ; ?></th>
                            <th><?php echo $pat_array5[1]; ?></th>
                            <th><?php echo $pat_array5[2] ;?></th>
                            <th><?php echo $pat_array5[3] ;?></th>
                            <th><?php echo $pat_array5[4] ; ?> </th>
                            <th><?php echo $pat_array5[5] ;?> </th>
                            <th><?php echo $pat_array5[6] ;?>  </th>
                            <th><?php echo $pat_array6[0] ;?>  </th>
                            <th><?php echo $pat_array6[1] ;?>  </th>
                            <th><?php echo $pat_array6[2] ;?>  </th>
                            <th><?php echo $pat_array6[3] ;?>  </th>
                            <th><?php echo $pat_array7[1] ;?>  </th>
                            
                          </tr>
                
            </table>
        </body>
    </form>
</p>
<p><a href="index.php">Return to index</p>
<p><a href="doctor_home.php">Return to doctor home</p>
</html>