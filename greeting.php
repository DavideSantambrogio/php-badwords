
<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
$evident = $_GET['evident'];


// Sostituisci tutte le occorrenze della parola con ***
$censoredParagraph = str_replace($word, '***', $paragraph);

// Evidenzia la parola nel paragrafo
$paragraphHighlighted = str_replace($evident, '<span style="background-color: red;">'.$evident.'</span>', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Paragrafo:</h2>
    <p><?php echo ($paragraph); ?></p>
    
    <h2>Lunghezza del Paragrafo:</h2>
    <p><?php echo strlen($paragraph); ?> caratteri</p>

    <h2>Paragrafo censurato:</h2>
    <p><?php echo ($censoredParagraph); ?></p>

    <h2>Parola evidenziata nel paragrafo:</h2>
    <p><?php echo ($paragraphHighlighted); ?></p>
</body>

</html>