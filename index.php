<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form PHP</title>
</head>

<body>
    <h1>Inserisci un paragrafo e una parola da censurare</h1>

    <form action="greeting.php" method="get">
        <label for="paragraph">Inserisci un paragrafo:</label>
        <input type="text" name="paragraph" id="paragraph" ></input>

        <label for="word">Inserisci la parola da censurare:</label>
        <input type="text" name="word" id="word" >

        <button type="submit">Invia</button>
    </form>
</body>

</html>