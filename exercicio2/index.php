<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
    $hora = $datetime->format( 'H' );

    if ($hora >= 0 && $hora <= 12) {
        echo "<h1>Bom dia!</h1>";
        echo "<img src='bomdia.jpg' alt='Bom dia!'>";
        
    } elseif ($hora > 12 && $hora < 18) {
        echo "<h1>Boa tarde!</h1>";
        echo "<img src='boatarde.jpg' alt='Boa tarde!'>";
        
    } else {
        echo "<h1>Boa noite!</h1>";
        echo "<img src='boanoite.jpg' alt='Boa noite!'>";
    }
        
    ?>
</body>
</html>