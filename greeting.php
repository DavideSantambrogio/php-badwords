
<?php
$paragraph = $_GET['paragraph'];
$word = $_GET['word'];
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
</body>

</html>