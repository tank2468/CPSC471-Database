<?php

echo "<h1>Register</h1>";

require 'tools_Connection.php';

@$submit = $_POST['submit'];
//form data
@$firstname = strip_tags($_POST['firstname']);
@$lastname	= strip_tags($_POST['lastname']);
@$username 	= strip_tags($_POST['username']);
@$email		= strip_tags($_POST['email']);

@$password = strip_tags($_POST['password']);
@$repeatpassword = strip_tags($_POST['repeatpassword']);
@$date = date("Y-m-d");
// If user has clicked on the submit botton; 

if ($submit) {

//Check for existance; If fullname, username, password and repeatpassword was entered, then
if($firstname && $lastname && $username && $email && $password && $repeatpassword) {

	$connection = connectToUsers();

	if ($password == $repeatpassword) {
		//check char length of username and fullname
		if (strlen($username) > 20) {
			echo "Your username is too long! Please keep in within 20 character";
		}
		if (strlen($firstname) > 25 || strlen($lastname) > 25) {
			echo "First or last name too long. Max is 25 characters each.";
		}
		if (strlen($password) > 32 || strlen($password) < 6) {
			echo "Password must be between 6 and 32 characters";
		} //Passed basic checks. Can attempt to register the user
		else {

			//Encrypting password
			$password = md5($password);
			$repeatpasswordd = md5($repeatpassword);

			//open connection to healthcare_users database

			//mysqli_select_db($connection, "healthcare_users");
			$ins_statement = "INSERT INTO Users VALUES ('$username', '$firstname', '$lastname', '$email', '$password', 'NULL')";
			//echo "<pre> Debug: $ins_statement</pre>";
			$q_result = mysqli_query($connection, $ins_statement);

			if (false == $q_result) {
				printf("\n\n\nSQL Error: %s\n", mysqli_error($connection));
			}
			//$connect = mysql_connect("localhost" , "root", "") or die("Could not connect!");
			//mysql_select_db("cpsc471proj");

			//$queryreg = mysql_query(" INSERT INTO Users VALUES ('','$fullname','$username','$password','$date')");

			die("\nYou have been registered. Please wait for usergroup confirmation. <a href ='index.php'>Return to login page</a>");
		}

		//Close the connection
		mysqli_close($connection);

	}
	else { //This message will be reached once password does not match repeatpassword
		echo "Your password do not match!";
	}
}
else
	echo "Please fill in <b>all</b> fields!";
	echo "$firstname, $lastname, $username, $email, $password, $repeatpassword";
}

?>

<html>
 <p>
<form action='a_register.php' method ='POST'>
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
					Last name:
				</td>
				<td>
					<input type='text' name='lastname' value ='<?php echo $lastname; ?>' >
				</td>
			</tr>
			
			<tr>
				<!--Coumln -->
				<td>
					Choose a username:
				</td>
				<td>							   <!-- This line starting from value will prevent users from retyping same info-->
				<input type='text' name='username' value ='<?php echo $username; ?>' >
				</td>
			</tr>

			<tr>
				<!--Coumln -->
				<td>
					E-mail:
				</td>
				<td>							   <!-- This line starting from value will prevent users from retyping same info-->
					<input type='text' name='email' value ='<?php echo $email; ?>' >
				</td>
			</tr>

			<tr>
				<!--Coumln -->
				<td>
					Password:
				</td>
				<td>
				<input type='password' name='password' value = '<?php echo $password; ?>'>
				</td>
			</tr>
			
			<tr>
				<!--Coumln -->
				<td>
					Repeat your password:
				</td>
				<td>
				<input type='password' name='repeatpassword' value = '<?php echo $repeatpassword; ?>'>
				</td>
			</tr>
	
	</table>
	<p>
	<input type='submit' name='submit' value='Register'>
</form>

</html>