<!DOCTYPE html>
<html lang="en">
<head>
	<title>	Student Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

		<div id='main'>
			<h1>Student Registration Form</h1>

			<form action='register.php' method='post'>

				<table border='3'>

					<!-- Caption Title for Fname, Mname, Lname -->
					<tr>
						<th>First Name</th>
						<th>Middle Name</th>
						<th>Last Name</th>
					</tr>

					<!-- Input field for fname, mname, lname -->
					<tr>
						<td>
							<input type='text' name='fname' placeholder="Firstname" />
						</td>
						<td>
							<input type='text' name='mname' placeholder="Middlename" />
						</td>
						<td>
							<input type='text' name='lname' placeholder="Lastname" />
						</td>
					</tr>
					<tr>
						<td id="title">Gender</td>
						<td>
							<input type='radio' value='Male' name='gender'>Male
						</td>
						<td>
							<input type='radio' value='Female' name='gender'>Female
						</td>
					</tr>
				<tr>
					<td colspan="3" id="bday">
						Birthday
					</td>
				</tr>
				<tr>
					<td>
						Month 
						<select name='month'>
								<option value="NULL">---</option>
								<option value='January'>January</option>
								<option value='February'>February</option>
								<option value='March'>March</option>
								<option value='April'>April</option>
								<option value='May'>May</option>
								<option value='June'>June</option>
								<option value='July'>July</option>
								<option value='August'>August</option>
								<option value='September'>September</option>
								<option value='October'>October</option>
								<option value='November'>November</option>
								<option value='December'>December</option>	
						</select>
					</td>
					<td>
							Day
							<select name='day'>
								<option value="NULL">---</option>
								<?php 	
									for ($i=1; $i<32; $i++): ?>
										<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>							
								<?php endfor; ?>
							</select>	
					</td>
					<td>
							Year
							<select name='year'>
									<option value="NULL">---</option>
								<?php 	
									for ($i=1980; $i<2015; $i++): ?>
										<option value="<?php echo $i; ?>"> <?php echo $i; ?> </option>							
								<?php endfor; ?>
							</select>	
					</td>
				</tr>
				<tr>	
						<td id="title">Program</td>
						<td colspan="3">
						<select name = 'program'>
								<option value="NULL">----- Select Program -----</option>
								<option name = 'program' value='BS Social Work'>BS Social Work</option>
								<option name = 'program' value='BS Accountancy'>BS Accountancy</option>
								<option name = 'program' value='Nursing Assistant'>Nursing Assistant</option>
								<option name = 'program' value='International Cookery'>International Cookery</option>
								<option name = 'program' value='AB Broadcasting'>AB Broadcasting</option>
								<option name = 'program' value='B.S. Information System'>B.S. Information System</option>
								<option name = 'program' value='B.S. Accounting Technology'>B.S. Accounting Technology</option>
								<option name = 'program' value='Mass Comm. Tech'>Mass Communication Technology</option>
								<option name = 'program' value='Associate in Computer Technology'>Associate in Computer Technology</option>
						</select>
						</td>
				</tr>
				<tr>	
						<td colspan="3" id="stype"> Student Type </td>
				</tr>
				<tr>
						<td colspan="3">	
							<input type="radio" value="Full" name="stype">Full <br>
							<input type="radio" value="Partial" name="stype">Partial <br>
							<input type="radio" value="Payee" name="stype">Payee
						</td>
				</tr>
				<tr>	
						<td colspan="3" id="add">
								Address
						</td>
				</tr>
				<tr>
					<td colspan="3">
						<textarea name='address' cols="75"></textarea>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<button>Submit Form</button>
					</td>
				</tr>
				</table>
			</div>
		</form>
</body>
</html>