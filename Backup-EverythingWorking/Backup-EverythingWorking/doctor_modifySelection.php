<html>
    <center>
<h1>Modify Patient</h1>
<body bgcolor = "#FFFFCC">
<form method="POST" >
    <label for="Selection_Box"> Patient details to modify : </label>
    <select id="cmbSelection" name="Selection" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
        <option value="information">Basic Information</option>
        <option value="background">Background Information</option>
        <option value="backgroundCondition">Background Condition</option>
        <option value="condition">Patient Condition</option>
        <option value="primaryContact">Primary Contact</option>
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

    if ($command_selection == "information") {
        header("Location:doctor_modifyInformation.php");
    }
    if ($command_selection == "background") {
        header("Location:doctor_modifyBackground.php");
    }
    if ($command_selection == "condition") {
        header("Location:doctor_modifyCondition.php");
    }
    if ($command_selection == "backgroundCondition") {
        header("Location:doctor_modifyBackgroundCondition.php");
    }
    if ($command_selection == "primaryContact") {
        header("Location:doctor_modifyPrimaryContact.php");
    }
    //echo "Chose option: $command_selection\n";


}
?>