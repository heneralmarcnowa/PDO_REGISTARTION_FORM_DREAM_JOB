<?php
require_once 'dbConfig.php';

function insertIntoApplicants($pdo, $first_name, $last_name, $email, $phone, $portfolio, $experience, $skills, $cover_letter) {
    $sql = "INSERT INTO applicants (first_name, last_name, email, phone, portfolio, experience, skills, cover_letter) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$first_name, $last_name, $email, $phone, $portfolio, $experience, $skills, $cover_letter]);

    if ($executeQuery) {
        return true;
    }
}

function seeAllApplicants($pdo) {
    $sql = "SELECT * FROM applicants";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute();
    if ($executeQuery) {
        return $stmt->fetchAll();
    }
}

function getApplicantById($pdo, $applicant_id) {
    $sql = "SELECT * FROM applicants WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);
    if ($stmt->execute([$applicant_id])) {
        return $stmt->fetch();
    }
}

function updateApplicant($pdo, $applicant_id, $first_name, $last_name, $email, $phone, $portfolio, $experience, $skills, $cover_letter) {
    $sql = "UPDATE applicants SET first_name = ?, last_name = ?, email = ?, phone = ?, portfolio = ?, experience = ?, skills = ?, cover_letter = ? WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$first_name, $last_name, $email, $phone, $portfolio, $experience, $skills, $cover_letter, $applicant_id]);

    if ($executeQuery) {
        return true;
    }
}

function deleteApplicant($pdo, $applicant_id) {
    $sql = "DELETE FROM applicants WHERE applicant_id = ?";
    $stmt = $pdo->prepare($sql);
    $executeQuery = $stmt->execute([$applicant_id]);

    if ($executeQuery) {
        return true;
    }
}
?>