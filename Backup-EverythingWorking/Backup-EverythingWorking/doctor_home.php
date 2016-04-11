<html>
    <center>
<h1>Doctor Home</h1>
<body bgcolor = "#FFFFCC">
<form method="POST" >
    <label for="Selection_Box"> Please make a selection : </label>
    <select id="cmbSelection" name="Selection" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
        <option value="viewPatient">View Patient</option>
        <option value="newPatient">New Patient</option>
        <option value="modifyPatient">Modify Patient</option>
        <option value="deletePatient">Delete Patient</option>
    </select>
    <input type="hidden" name="selected_text" id="selected_text" value="" />
    <input type="submit" name="search" value="Select"/>
</form>

<p><a href="index.php">Return to index</p>
<p><a href="doctor_home.php">Return to doctor home</p>
</body>
    </center>
</html>

<?php

if(isset($_POST['search']))
{
    $command_selection = strip_tags($_POST['Selection']); // get the selected text

    if ($command_selection == "viewPatient") {
        header("Location:doctor_viewPatient.php");
    }
    if ($command_selection == "newPatient") {
        header("Location:doctor_newPatient.php");
    }
    if ($command_selection == "modifyPatient") {
        header("Location:doctor_modifySelection.php");
    }
    if ($command_selection == "deletePatient") {
        header("Location:doctor_deletePatient.php");
    }
    //echo "Chose option: $command_selection\n";


}
?>