
<html>
    <body bgcolor="#FFFFCC">   
    <center>
        <h2> Login </h2>
<?php

require 'tools_Connection.php';
//session_start();

@$submit = $_POST['submit'];
//Works the same way as GET method except POST make the data invisible to the user
@$username = strip_tags($_POST['username']);
@$password = strip_tags($_POST['password']);

// if both condition of $username and $password is correct then we are going to connect it to the database!

if ($submit) {
	//echo "Submit has been pressed\n";
	if ($username && $password) {
		$connection = connectToUsers();
		// If user name has been type;
		// This will print out all the user name; where
		//echo "username: $username, password: $password\n";

		$q_result = mysqli_query($connection, "SELECT * FROM Users WHERE Username = '$username'");
		if (false == $q_result) {
                    printf("\n\n\nSQL Error: %s\n", mysqli_error($connection));
                       echo "Incorrect username or password";
		}
		//This line stores number of rows in query
		$numrows = mysqli_num_rows($q_result);
		//echo "num rows: $numrows\n";
		if ($numrows != 0) {
			// code to login ; Password check; fetching the info into an array
			//echo "we are in numrows\n";
			while ($row = mysqli_fetch_assoc($q_result)) {
				$dbusername = $row['Username'];
				$dbpassword = $row['Password'];
				$dbusergroup = $row['Usergroup'];
			}

			$password = md5($password);
			//Check to see if they match!
			//echo "username: $username, dbuser: $dbusername\n";
			//echo "password: $password, dbpass: $dbpassword\n";
			if (($username == $dbusername) && ($password == $dbpassword)) {

				//echo "You are in! <a href='member.php'>Click</a> here to enter the member page.";
				//@$_SESSION['username'] = $username;
				//echo"checked out?\n";
				if ($dbusergroup == "SysAdmin") {
					header("Location:admin_home.php");
				}
				if ($dbusergroup == "Doctor") {
					header("Location:doctor_home.php");
				}
				if ($dbusergroup == "Nurse") {
					header("Location:nurse_home.php");
				}
				if ($dbusergroup == "LabTechnician") {
					header("Location:labTech_home.php");
				}
				else {
					echo "Usergroup not set. Please contact system administrator for help\n";
				}

			}
		}
		else {
			echo "Incorrect username or password";
		}
	}
}
?>

	<p>
		<form action='a_loginwith.php' method ='POST'>
			<table>
				<!-- rows -->
				<tr>
					<!--Column -->
					<td>
						Username:
					</td>
					<td>
						<input type='text' name='username' value ='<?php echo $username; ?>' >
					</td>
				</tr>

				<!-- rows -->
				<tr>
					<!--Column -->
					<td>
						Password:
					</td>
					<td>
						<input type='password' name='password' value ='' >
					</td>
				</tr>
			</table>

		<p>
		<input type='submit' name='submit' value='Login'>
		</form>
	</p>
    </body> 
    </center>  
</html>
