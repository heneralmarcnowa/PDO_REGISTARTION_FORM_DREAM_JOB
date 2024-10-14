<?php require_once 'core/dbConfig.php'; ?>
<?php require_once 'core/models.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Applicant</title>
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
        form {
            display: flex;
            flex-direction: column;
        }
        .form-group {
            margin-bottom: 15px; 
        }
        label {
            margin-bottom: 5px;
            color: #555;
            font-weight: bold; 
        }
        input, textarea, button {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            width: 100%; 
            box-sizing: border-box; 
        }
       
        button {
            background-color: #28a745;
            color: #fff;
            width: 86px;
            height: 39px;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        button:hover {
            background-color: #218838;
        }

        .back-button {
            background-color: #007bff;
            color: #fff;
            width: 86px;
            height: 39px;
            line-height: 39px; /* This ensures vertical centering */
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 10px;
        }

        .back-button:hover {
            background-color: #0056b3;
        }


    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Applicant</h1>
        <?php $getApplicantById = getApplicantById($pdo, $_GET['applicant_id']); ?>
        <form action="core/handleForms.php?applicant_id=<?php echo $_GET['applicant_id']; ?>" method="POST">
            <div class="form-group">
                <label for="firstName">First Name</label> 
                <input type="text" name="firstName" value="<?php echo htmlspecialchars($getApplicantById['first_name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label> 
                <input type="text" name="lastName" value="<?php echo htmlspecialchars($getApplicantById['last_name']); ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($getApplicantById['email']); ?>" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" value="<?php echo htmlspecialchars($getApplicantById['phone']); ?>" required>
            </div>
            <div class="form-group">
                <label for="portfolio">Portfolio URL</label>
                <input type="url" name="portfolio" value="<?php echo htmlspecialchars($getApplicantById['portfolio']); ?>" required>
            </div>
            <div class="form-group">
                <label for="experience">Years of Experience</label>
                <input type="number" name="experience" value="<?php echo htmlspecialchars($getApplicantById['experience']); ?>" required>
            </div>
            <div class="form-group">
                <label for="skills">Skills</label>
                <input type="text" name="skills" value="<?php echo htmlspecialchars($getApplicantById['skills']); ?>" required>
            </div>
            <div class="form-group">
                <label for="coverLetter">Cover Letter</label>
                <textarea name="coverLetter" rows="4"><?php echo htmlspecialchars($getApplicantById['cover_letter']); ?></textarea>
            </div>
            <button type="submit" name="editApplicantBtn">Update</button>
            <a href="index.php" class="back-button">Back</a>
        </form>
    </div>
</body>
</html>