<?php
    require 'tools_SysAdmin.php';
    @$username = strip_tags($_POST['username']);

    if ($username) {
        $deleteResult = removeUser($username);
        echo $deleteResult;
    }
?>

<html>
<h1>Delete User</h1>
<p>
    <form action='admin_deleteUser.php' method ='POST'>
        <table>
            <!-- rows -->

                <!--Column -->
                <td>
                    Username:
                </td>
                <td>
                    <input type='text' name='username' value ='<?php echo $username; ?>' >
                </td>

    <input type='submit' name='submit' value='Delete'>
    </form>
    <p><a href="index.php">Return to index</p>
    <p><a href="admin_home.php">Return to admin home</p>
</p>
</html>