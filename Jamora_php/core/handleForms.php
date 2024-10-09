<?php
require_once 'dbConfig.php';
require_once 'models.php';
?>

<?php

if(isset($_POST['InsertButton'])){
   echo "<pre>";
   print_r($_POST);
   echo "</pre>";
}

 if (isset($_POST['InsertButton'])) {
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$age = trim($_POST['age']);
	$degree = trim($_POST['degree']);
	$experience = trim($_POST['experience']);
	$nationality = trim($_POST['nationality']);
	$skills = trim($_POST['skills']);

	if (!empty($first_name) && !empty($last_name) && !empty($age) && !empty( $degree) && !empty($experience)  && !empty($nationality)  && !empty($skills)) {
			$query = insertRecords($pdo, $first_name, $last_name, $age, $degree, $experience, $nationality, $skills);

		if ($query) {
			header("Location:../index.php");
		}

		else {
			echo "Insertion failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}

if (isset($_POST['EditButton'])) {
	$applicant_ID = $_GET['applicant_ID'];
	$first_name = trim($_POST['first_name']);
	$last_name = trim($_POST['last_name']);
	$age = trim($_POST['age']);
	$degree = trim($_POST['degree']);
	$experience = trim($_POST['experience']);
	$nationality = trim($_POST['nationality']);
	$skills = trim($_POST['skills']); 

	if (!empty($first_name) && !empty($last_name) && !empty($age) && !empty( $degree) && !empty($experience)  && !empty($nationality)  && !empty($skills)) {
			$query = updateapplicant($pdo, $applicant_ID, $first_name, $last_name, $age, $degree, $experience, $nationality, $skills);

		if ($query) {
			header("Location:../index.php");
		}

		else {
			echo "Update failed";
		}
	}

	else {
		echo "Make sure that no fields are empty";
	}
	
}

if (isset($_POST['deleteBtn'])) {

	$query = delapplicant($pdo, $_GET['applicant_ID']);

	if ($query) {
		header("Location:../index.php");
	}
	else {
		echo "Deletion failed";
	    }
}



?>
