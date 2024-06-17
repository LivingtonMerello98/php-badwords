<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Bad-words</title>
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <div class="col-12 bg-dark text-center rounded my-3 py-2 text-white">
                <h1 class="mb-3">Bad Words</h1>
                <p>Enter your text and choose which word to censor</p>
            </div>
            <form action="result.php" method="GET" class="w-100">
                <div class="col-12 mb-3">
                    <label for="text" class="form-label">Inserisci il testo:</label>
                    <textarea name="text" id="text" rows="4" class="form-control"></textarea>
                </div>
                <div class="col-12 mb-3">
                    <label for="censure" class="form-label">Inserisci la parola che verrà censurata:</label>
                    <input type="text" name="censure" id="censure" class="form-control">
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Invia Modulo</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>