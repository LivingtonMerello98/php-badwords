<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad-words</title>
</head>

<body>

    <form action="result.php" method="GET">
        <label for="text">inserisci il testo:</label><br>
        <textarea name="text" id="text" rows="4" cols="50"></textarea>
        <br>
        <br>
        <label for="censure">inserisci la parola che verrà censurata:</label>
        <input type="text" name="censure" id="censure"><br><br>
        <button type="submit" value="submit"></button>
    </form>

</body>

</html>