<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Conversion Results</h1>

    <?php

    // ?PHP Super Global variables are used to get the values from the forms
    // $_GET is used to get the values from the form using the GET method
    // $_POST is used to get the values from the form using the POST method
    // $_REQUEST is used to get the values from the form using the GET or POST method
    // $_SERVER is used to get the values from the server
    // $_FILES is used to get the values from the files
    // $_ENV is used to get the values from the environment variables
    // $_COOKIE is used to get the values from the cookies
    // $_SESSION is used to get the values from the session variables
    // $_GLOBALS is used to get the values from the global variables
    
    $amount = $_GET['amount']; // or $_POST['amount'] depending on form method
    $crypto = $_GET['crypto']; // or $_POST['crypto'] depending on form method

    echo "Amount: " . htmlspecialchars($amount) . "<br>";
    echo "Cryptocurrency: " . htmlspecialchars($crypto);
?>




</body>

</html>