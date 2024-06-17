<?php
// Creo le variabili
$text = isset($_GET['text']) ? $_GET['text'] : '';
$censure = isset($_GET['censure']) ? $_GET['censure'] : '';
$hide_word = '***';
$censured_word = '';
$text_length = 0;

if ($text && $censure) {
    $censured_word = str_replace($censure, $hide_word, $text);
    $text_length = strlen($text);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results - Bad Words Censorship</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 bg-dark text-center rounded my-3 py-2 text-white">
                <h1 class="mb-3">Results</h1>
            </div>
            <div class="col-12">
                <?php
                if ($text && $censure) {
                    echo "
                    <div class='card'>
                        <div class='card-body'>
                            <p><strong>Original Text:</strong> $text</p>
                            <p><strong>Length of Text:</strong> $text_length characters</p>
                            <p><strong>Censured Text:</strong> $censured_word</p>
                        </div>
                    </div>";
                } else {
                    // aggiunta controllo se i campi inviati risultano vuoti
                    echo "
                    <div class='alert alert-danger' role='alert'>
                        Text and censure word are required!
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>