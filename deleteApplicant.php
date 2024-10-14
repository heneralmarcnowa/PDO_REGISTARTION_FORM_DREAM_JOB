<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Applicant</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 90%;
            max-width: 600px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .applicant-details {
            margin-bottom: 20px;
        }

        .applicant-details p {
            margin: 5px 0;
            color: #555;
        }

        .applicant-details b {
            font-weight: bold;
            color: #333;
        }

        button, .back-button {
            background-color: #dc3545;
            color: #fff;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            border: none;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            margin: 5px;
        }

        button:hover {
            background-color: #c82333;
        }

        .back-button {
            background-color: #007bff;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .button-container {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Are you sure you want to delete this applicant?</h1>
        <?php $getApplicantById = getApplicantById($pdo, $_GET['applicant_id']); ?>
        <div class="applicant-details">
            <p><b>First Name:</b> <?php echo htmlspecialchars($getApplicantById['first_name']); ?></p>
            <p><b>Last Name:</b> <?php echo htmlspecialchars($getApplicantById['last_name']); ?></p>
            <p><b>Email:</b> <?php echo htmlspecialchars($getApplicantById['email']); ?></p>
            <p><b>Phone:</b> <?php echo htmlspecialchars($getApplicantById['phone']); ?></p>
            <p><b>Portfolio:</b> <a href="<?php echo htmlspecialchars($getApplicantById['portfolio']); ?>" target="_blank"><?php echo htmlspecialchars($getApplicantById['portfolio']); ?></a></p>
            <p><b>Experience:</b> <?php echo htmlspecialchars($getApplicantById['experience']); ?></p>
            <p><b>Skills:</b> <?php echo htmlspecialchars($getApplicantById['skills']); ?></p>
            <p><b>Cover Letter:</b> <?php echo htmlspecialchars($getApplicantById['cover_letter']); ?></p>
        </div>
        <div class="button-container">
            <form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
                <button type="submit" name="deleteApplicantBtn">Delete</button>
            </form>
            <a href="index.php" class="back-button">Back</a>
        </div>
    </div>
</body>
</html>