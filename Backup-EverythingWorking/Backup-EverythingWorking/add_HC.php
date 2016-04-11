<?php
/* 
 * Created by: Faeze Keshavarz
 * Date: 26/11/2015
 */

//This file is used to populate the table

require_once 'tools_Connection.php';
require_once 'queries_Patient.php';
require_once 'queries_HealthBG.php';
require_once 'queries_PrimaryContact.php';

add_patient_tuple('123456789', 'John', 'M', 'Black', '2005-09-23', 'Calgary', '4039991122');
add_patient_tuple('234567890', 'Megan', 'J', 'Jones', '1985-02-05', 'Edmonton', '4038889933');
add_patient_tuple('345678901', 'David', 'K', 'White', '1992-03-15', 'Calgary', '4035551111');
add_patient_tuple('456789012', 'Jessica', 'L', 'Blue', '1973-11-05', 'Calgary', '4039996677');
add_patient_tuple('567890123', 'Mona', 'S', 'Johnson', '1968-06-06', 'Calgary', '4032225454');
add_patient_tuple('678901234', 'William', 'M', 'Stevenson', '1952-04-12', 'Edmonton', '4036667777');
add_patient_tuple('789012345', 'Asha', 'C', 'Peterson', '1961-01-01', 'Calgary', '4031112233');
add_patient_tuple('890123456', 'James', 'R', 'Brook', '1974-05-04', 'Calgary', '4034447676');
add_patient_tuple('901234567', 'Micheal', 'K', 'Black', '1988-08-08', 'Edmonton', '4033335678');
add_patient_tuple('101010101', 'Joe', 'B', 'Adams', '1946-12-24', 'Calgary', '4032228899');

\add_health_condition_tuple('1122334455', 'pneumonia', '123456789');
\add_health_condition_tuple('2233445566', 'heart attack', '234567890');
\add_health_condition_tuple('3344556677', 'brain tumor', '345678901');
\add_health_condition_tuple('4455667788', 'mengitis', '456789012');
\add_health_condition_tuple('5566778899', 'influenza', '567890123');
\add_health_condition_tuple('6677889900', 'hepatitis', '678901234');
\add_health_condition_tuple('7788990011', 'eye infection', '789012345');
\add_health_condition_tuple('8899001122', 'stroke', '890123456');
\add_health_condition_tuple('9900112233', 'lung cancer', '901234567');
\add_health_condition_tuple('5050505050', 'car accident', '101010101');

add_health_background_tuple('1212121212', 100, 60, 'Azithromycin', '123456789');
add_health_background_tuple('2323232323', 120, 50, 'ACE inhibitor', '234567890');
add_health_background_tuple('3434343434', 090, 55, 'Platinol', '345678901');
add_health_background_tuple('4545454545', 110, 45, 'IV antibiotics', '456789012');
add_health_background_tuple('5656565656', 060, 40, 'Antiviral', '567890123');
add_health_background_tuple('6767676767', 070, 56, 'Serum', '678901234');
add_health_background_tuple('7878787878', 075, 66, 'Gentamycin', '789012345');
add_health_background_tuple('8989898989', 055, 62, 'clot-bustings', '890123456');
add_health_background_tuple('9090909090', 112, 58, 'Platinol', '901234567');
add_health_background_tuple('1515151515', 104, 61, 'Blood', '101010101');

add_primary_contact_tuple('123456789', '4031112222');
add_primary_contact_tuple('234567890', '4032223333');
add_primary_contact_tuple('345678901', '4033334444');
add_primary_contact_tuple('456789012', '4034445555');
add_primary_contact_tuple('567890123', '4035556666');
add_primary_contact_tuple('678901234', '4036667777');
add_primary_contact_tuple('789012345', '4037778888');
add_primary_contact_tuple('890123456', '4038889999');
add_primary_contact_tuple('901234567', '4039990000');
add_primary_contact_tuple('101010101', '4030001111');

function add_health_condition_tuple($hc_number,$condition_type,$ptnID) {
    $q1 = "INSERT INTO Health_Conditions(hc_number,condition_type,ptnID)
VALUES ('$hc_number','$condition_type','$ptnID')";
    
    $this_link = connectToHealthcare();
    
    mysqli_query($this_link, $q1);
}
?>
