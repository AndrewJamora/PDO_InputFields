<?php require_once "core/dbConfig.php";?>
<?php require_once "core/models.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Applicant Form</title>
</head>
<body>
    <h4>Application Form for the Aspiring Employees</h4>
    <form action="core/handleForms.php" method="POST">
    <p><Label for="Firstname">First name:</Label><input type="text" name="first_name"></p>
    <p><Label for="Lastname">Last name:</Label><input type="text" name="last_name"></p>
    <p><Label for="Age">Age:</Label><input type="number" name="age"></p>
    <p><Label for="Degree">Degree:</Label><input type="text" name="degree"></p>
    <p><Label for="Experience">Years of Experience:</Label><input type="text" name="experience"></p>
    <p><Label for="Nationality">Nationality:</Label><input type="text" name="nationality"></p>
    <p><Label for="Skills">Skills:</Label><input type="text" name="skills">
    <input type="submit" name="InsertButton">
    </p>
    </form>
    <table style="border: 2px solid black">
	  <tr>
	    <th>Applicant ID</th>
	    <th>First Name</th>
	    <th>Last Name</th>
	    <th>Age</th>
	    <th>Degree</th>
	    <th>Experience</th>
	    <th>Nationality</th>
	    <th>Skills</th>
        <th>Action</th>
	  </tr>

	  <?php $Allapplicants = allapplicants($pdo); ?>
	  <?php foreach ($Allapplicants as $row) { ?>
	  <tr>
	  	<td><?php echo $row['applicant_ID']; ?></td>
	  	<td><?php echo $row['first_name']; ?></td>
	  	<td><?php echo $row['last_name']; ?></td>
	  	<td><?php echo $row['Age']; ?></td>
	  	<td><?php echo $row['Degree']; ?></td>
	  	<td><?php echo $row['Experience']; ?></td>
	  	<td><?php echo $row['Nationality']; ?></td>
	  	<td><?php echo $row['skills']; ?></td>
          <td>
	  		<a href="editapplicant.php?applicant_ID=<?php echo $row['applicant_ID'];?>">Edit</a>
	  		<a href="deleteapplicant.php?applicant_ID=<?php echo $row['applicant_ID'];?>">Delete</a>
	  	</td>
	  </tr>
	  <?php } ?>
	</table>

</body>
</html>