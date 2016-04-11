<html>
<h1>Administrator Home</h1>
<form method="POST" >
    <label for="Selection_Box"> Please make a selection : </label>
    <select id="cmbSelection" name="Selection" onchange="document.getElementById('selected_text').value=this.options[this.selectedIndex].text">
        <option value="changeUG">Modify Usergroup</option>
        <option value="deleteUser">Delete User</option>
    </select>
    <input type="hidden" name="selected_text" id="selected_text" value="" />
    <input type="submit" name="search" value="Select"/>
</form>

<p><a href="index.php">Return to index</p>
<p><a href="admin_home.php">Return to admin home</p>
</html>

<?php

if(isset($_POST['search']))
{
    $command_selection = strip_tags($_POST['Selection']); // get the selected text

    if ($command_selection == "changeUG") {
        header("Location:admin_modUserGroup.php");
    }
    if ($command_selection == "deleteUser") {
        header("Location:admin_deleteUser.php");
    }
    //echo "Chose option: $command_selection\n";
}
?>