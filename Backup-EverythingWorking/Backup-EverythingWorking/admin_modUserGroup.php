<?php
    require 'tools_SysAdmin.php';
    @$username = strip_tags($_POST['username']);

    if(isset($_POST['search']))
    {
        $command_selection = strip_tags($_POST['Selection']); // get the selected text

        if ($username && $command_selection) {
            $changeUGresult = changeUserGroup($username, $command_selection);
            echo $changeUGresult;
        }
    }
?>

<html>
<h1>Change User Group</h1>
<form method="POST" >
    <p>
    <table>
        <!-- rows -->
        <tr>
            <!--Column -->
            <td>
                Username:
            </td>
            <td>
                <input type='text' name='username' value ='' >
            </td>
        </tr>
    </table>
    </p>

    <p>
    <label for="Selection_Box"> Please make a selection : </label>
    <select id="cmbSelection" name="Selection" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
        <option value="SysAdmin">SysAdmin</option>
        <option value="Doctor">Doctor</option>
        <option value="Nurse">Nurse</option>
        <option value="LabTechnician">Lab Technician</option>
        <option value="HospitalAdmin">HospitalAdmin</option>
    </select>
    <input type="hidden" name="selected_text" id="selected_text" value="" />
    <input type="submit" name="search" value="Modify"/>
    </p>
</form>

<p><a href="index.php">Return to index</p>
<p><a href="admin_home.php">Return to admin home</p>
</html>