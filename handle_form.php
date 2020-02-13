<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Handle</title>
</head>
<body>

    <?php

        //Display errors in the script
        ini_set ('display_errors', 1);

        // Display all possible problems
        error_reporting (E_ALL | E_STRICT);


        // Get the values from the $_POST array:
        $first_name = $_POST['fname'];
        $last_name = $_POST['lname'];
        $email = $_POST['email'];

        // Create a full name variable:
        $name = $first_name . ' ' . $last_name;

        // Print a message:
        print "<div>$name, thank you for submitting</div>";

    ?>
</body>
</html>