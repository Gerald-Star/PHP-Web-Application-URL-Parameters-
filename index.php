<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto API</title>
</head>

<body>

    <h1>Crypto Masters</h1>

    <!-- Using the GET method to access the url  -->

    <!--You can also use the POST method  -->



    <form action="convert.php" method="GET">

        <label for="amount">Amount</label>
        <input id="amount" name="amount">
        <label for="crypto">Cryptocurrency</label>
        <select id="crypto" name="crypto">
            <option value="BTC">BTC</option>
            <option value="ETH">ETH</option>
        </select>
        <button type="submit">Convert</button>
    </form>

</body>

</html>