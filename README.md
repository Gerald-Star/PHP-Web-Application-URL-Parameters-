# MASTERING PHP USING CRUD METHOD - SUPERGLOABL VARIABLES

- GET; POST; COOKIES; REQUEST, SERVER; SESSION; ENV




<form action="convert.php">
    <label for="amount">Amount</label>
    <input id="amount" name="amount" type="text">
    
    <label for="crypto">Cryptocurrency</label>
    <select id="crypto" name="crypto">
        <option value="BTC">BTC</option>
        <option value="ETH">ETH</option>
    </select>
    
<button type="submit">Convert</button>
</form>


## Explanation

<option value="BTC">BTC</option>: The value attribute is set to "BTC", so when this option is selected, "BTC" will be sent to the server.
<option value="ETH">ETH</option>: Similarly, "ETH" will be sent when this option is selected.
convert.php
In convert.php, you can access the submitted values like this:


<?php
$amount = $_GET['amount']; // or $_POST['amount'] depending on form method
$crypto = $_GET['crypto']; // or $_POST['crypto'] depending on form method

echo "Amount: " . htmlspecialchars($amount) . "<br>";
echo "Cryptocurrency: " . htmlspecialchars($crypto);
?>


## Notes

Form Method: If your form is using the GET method (default), the values will appear in the URL as query parameters (e.g., convert.php?amount=100&crypto=BTC). If you use the POST method (<form action="convert.php" method="POST">), the values will not appear in the URL but will still be accessible in convert.php via $_POST.
Security: Always use functions like htmlspecialchars() to sanitize output when displaying user input to prevent XSS (Cross-Site Scripting) attacks.

This solve the issue of your URL not showing the crypto and amount values when the form is submitted.









