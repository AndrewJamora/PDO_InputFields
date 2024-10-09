<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		body {
			font-family: "Arial";
		}
		input {
			font-size: 1.5em;
			height: 50px;
			width: 200px;
		}
		table, th, td {
		  border:1px solid black;
		}
	</style>
</head>
<body>
	<h1>Deleting this applicant?</h1>
	<?php $getapplicantbyID = getapplicantById($pdo, $_GET['applicant_ID']); ?>
	<form action="core/handleForms.php?applicant_ID=<?php echo $_GET['applicant_ID']; ?>" method="POST">

		<div class="studentContainer" style="border-style: solid; 
		font-family: 'Arial';">
			<p>First Name: <?php echo $getapplicantbyID['first_name']; ?></p>
			<p>Last Name: <?php echo $getapplicantbyID['last_name']; ?></p>
			<p>Age: <?php echo $getapplicantbyID['Age']; ?></p>
			<p>Degree: <?php echo $getapplicantbyID['Degree']; ?></p>
			<p>Experience: <?php echo $getapplicantbyID['Experience']; ?></p>
			<p>Nationality: <?php echo $getapplicantbyID['Nationality']; ?></p>
			<p>Skills: <?php echo $getapplicantbyID['skills']; ?></p>
			<input type="submit" name="deleteBtn" value="Delete">
		</div>
	</form>
</body>
</html>