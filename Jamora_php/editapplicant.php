<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Application Form</title>
</head>
<body>
    <h4>Application Form in Editing</h4>
    <?php $getapplicantByID = getapplicantByID($pdo,$_GET['applicant_ID']); ?>
    <form action="core/handleForms.php? applicant_ID=<?php echo $_GET['applicant_ID']; ?>" method="POST">

    <p>     
    <Label for="Firstname">First name:</Label>
    <input type="text" name="first_name" value="<?php echo $getapplicantByID['first_name']; ?>">
    </p>

    <p><Label for="Lastname">Last name:</Label>
    <input type="text" name="last_name" value="<?php echo $getapplicantByID['last_name']; ?>">
    </p>

    <p><Label for="Age">Age:</Label>
    <input type="number" name="age"value="<?php echo $getapplicantByID['Age']; ?>">
    </p>

    <p><Label for="Degree">Degree:</Label>
    <input type="text" name="degree" value="<?php echo $getapplicantByID['Degree']; ?>">
    </p>

    <p><Label for="Experience">Years of Experience:</Label>
    <input type="text" name="experience" value="<?php echo $getapplicantByID['Experience']; ?>">
    </p>

    <p><Label for="Nationality">Nationality:</Label>
    <input type="text" name="nationality" value="<?php echo $getapplicantByID['Nationality']; ?>">
    </p>

    <p><Label for="Skills">Skills:</Label>
    <input type="text" name="skills" value="<?php echo $getapplicantByID['skills']; ?>">
    <input type="submit" name="EditButton">
    </p>

</body>
</html>