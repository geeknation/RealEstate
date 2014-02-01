<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Add Tenants</title>
	</head>
	<body>
		<form action="controller.php" method="post">
			<table>
				<tr>
					<td>First Name</td>
					<td>
						<input type="text" name="firstName" id="firstName"/>
					</td>
				</tr>
				<tr>
					<td>Other Names</td>
					<td>
						<input type="text" name="secondName" id="secondname"/>
						
					</td>
				</tr>
				<tr>
					<td>ID Number</td>
					<td>
						<input type="text" name="idnumber" id="idnumber"/>
					</td>
				</tr>
				<tr>
					<td>Date Of Birth</td>
					<td>
						<input type="text" name="dob" id="dob" />
					</td>
				</tr>
				<tr>
					<td>Occupation</td>
					<td>
						<input type="text" name="occupation" id="occupation"/>
					</td>
				</tr>
				<tr>
					<td>Company</td>
					<td>
						<input type="text" name="company" id="company"/>
					</td>
				</tr>
				<tr>
					<td>Phone Number</td>
					<td>
						<input type="text" name="phonenumber" id="phonenumber"/>
					</td>
				</tr>
				<tr>
					<td>Email</td>
					<td>
						<input type="text" name="email" id="email"/>
					</td>
				</tr>
				<tr>
					<td>
						<hr/>
					</td>
				</tr>
				<tr>
					<td>Username</td>
					<td>
						<input type="text" name="username" id="username"/>
					</td>
				</tr>
				<tr>
					<td>Password</td>
					<td>
						<input type="password" name="password" id="password"/>
					</td>
					
				</tr>
				<tr>
					<td>Confirm Password</td>
					<td>
						<input type="password" name="confpassword" id="confpassword"/>
					</td>
					
				</tr>
				<tr>
					<td>
						<input type="submit" id="addTenant" value="Add Tenant"/>
						<input type="text" name="flag" value="addTenant"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>

