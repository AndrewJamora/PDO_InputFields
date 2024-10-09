<?php 

require_once 'dbConfig.php';

function insertRecords($pdo, $first_name, $last_name, $age, $degree, $experience, $nationality, $skills) {

	$sql = "INSERT INTO applicants (first_name, last_name, Age, Degree, Experience, Nationality, Skills) VALUES (?,?,?,?,?,?,?)";

	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$first_name, $last_name, $age, $degree, $experience, $nationality, $skills]);

	if ($executeQuery) {
		return true;	
	}
}

function allapplicants($pdo) {
	$sql = "SELECT * FROM applicants";
	$stmt = $pdo->prepare($sql);
	$executeQuery = $stmt->execute();
	if ($executeQuery) {
		return $stmt->fetchAll();
	}
}

function getapplicantByID($pdo, $applicant_ID) {
	$sql = "SELECT * FROM applicants WHERE applicant_ID = ?";
	$stmt = $pdo->prepare($sql);
	if ($stmt->execute([$applicant_ID])) {
		return $stmt->fetch();
	}
}

function updateapplicant($pdo, $applicant_ID, $first_name, $last_name, 
	$age, $degree, $experience, $nationality, $skills) {

	$sql = "UPDATE applicants
				SET first_name = ?, 
					last_name = ?, 
					Age = ?, 
					Degree = ?, 
					Experience = ?, 
					Nationality = ?, 
					skills = ? 
			    WHERE applicant_ID = ?";
	
    $stmt = $pdo->prepare($sql);
	
	$executeQuery = $stmt->execute([$first_name, $last_name, $age, $degree, $experience, $nationality, $skills, $applicant_ID]);

	if ($executeQuery) {
		return true;
	}
}

function delapplicant($pdo, $applicant_ID) {

	$sql = "DELETE FROM applicants WHERE applicant_ID = ?";
	$stmt = $pdo->prepare($sql);

	$executeQuery = $stmt->execute([$applicant_ID]);

    if ($executeQuery) {
		return true;
	}

}


?>