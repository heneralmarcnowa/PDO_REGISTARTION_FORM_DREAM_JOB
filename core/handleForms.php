<?php
require_once 'dbConfig.php';
require_once 'models.php';

if (isset($_POST['applyJobBtn'])) {
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $portfolio = trim($_POST['portfolio']);
    $experience = trim($_POST['experience']);
    $skills = trim($_POST['skills']);
    $coverLetter = trim($_POST['coverLetter']);

    if (!empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone) && !empty($portfolio) && !empty($experience) && !empty($skills) && !empty($coverLetter)) {
        $query = insertIntoApplicants($pdo, $firstName, $lastName, $email, $phone, $portfolio, $experience, $skills, $coverLetter);

        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Application submission failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['editApplicantBtn'])) {
    $applicant_id = $_GET['applicant_id'];
    $firstName = trim($_POST['firstName']);
    $lastName = trim($_POST['lastName']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $portfolio = trim($_POST['portfolio']);
    $experience = trim($_POST['experience']);
    $skills = trim($_POST['skills']);
    $coverLetter = trim($_POST['coverLetter']);

    if (!empty($applicant_id) && !empty($firstName) && !empty($lastName) && !empty($email) && !empty($phone) && !empty($portfolio) && !empty($experience) && !empty($skills) && !empty($coverLetter)) {
        $query = updateApplicant($pdo, $applicant_id, $firstName, $lastName, $email, $phone, $portfolio, $experience, $skills, $coverLetter);

        if ($query) {
            header("Location: ../index.php");
        } else {
            echo "Update failed";
        }
    } else {
        echo "Make sure that no fields are empty";
    }
}

if (isset($_POST['deleteApplicantBtn'])) {
    $query = deleteApplicant($pdo, $_GET['applicant_id']);

    if ($query) {
        header("Location: ../index.php");
    } else {
        echo "Deletion failed";
    }
}
?>