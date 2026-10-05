<?php

function clean_input($value) {
    $value = trim($value);
    $value = htmlspecialchars($value);
    return $value;
}

$studentName = clean_input($_POST["studentName"] ?? "");
$studentId = clean_input($_POST["studentId"] ?? "");
$email = clean_input($_POST["email"] ?? "");
$workshop = clean_input($_POST["workshop"] ?? "");
$message = clean_input($_POST["message"] ?? "");

$errors = array();

if ($studentName == "") {
    $errors[] = "Full name is required.";
}

if ($studentId == "") {
    $errors[] = "Student ID is required.";
}

if ($email == "") {
    $errors[] = "Email address is required.";
}

if ($workshop == "") {
    $errors[] = "Please select a workshop.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Result</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">

        <?php if (count($errors) > 0): ?>

            <div class="result error">

                <h1>Registration Error</h1>

                <p>Please correct the following errors:</p>

                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>

                <a href="index.html" class="back-button">
                    Back to Registration Form
                </a>

            </div>

        <?php else: ?>

            <div class="result success">

                <h1>Registration Received</h1>

                <p>
                    Thank you for registering for the workshop.
                </p>

                <div class="details">

                    <p>
                        <strong>Full Name:</strong>
                        <?php echo $studentName; ?>
                    </p>

                    <p>
                        <strong>Student ID:</strong>
                        <?php echo $studentId; ?>
                    </p>

                    <p>
                        <strong>Email:</strong>
                        <?php echo $email; ?>
                    </p>

                    <p>
                        <strong>Workshop:</strong>
                        <?php echo $workshop; ?>
                    </p>

                    <?php if ($message != ""): ?>
                        <p>
                            <strong>Learning Expectations:</strong>
                            <?php echo $message; ?>
                        </p>
                    <?php endif; ?>

                </div>

                <a href="index.html" class="back-button">
                    Register Another Student
                </a>

            </div>

        <?php endif; ?>

    </div>

</body>
</html>