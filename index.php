<?php
echo "Hello world";
$name = 'livington';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bad-words</title>
</head>

<body>
    <p>il mio nome è <?php echo $name ?> </p>

    <form action="GET">
        <label for="censure"> insert your word</label>
        <input type="text" name="censure" id="censure">
    </form>

    <hr>
    <label for="text"> insert yout text</label>
    <textarea name="text" id="text"></textarea>
</body>

</html>