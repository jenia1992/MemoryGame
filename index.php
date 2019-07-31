<?php
include_once("imagesDB.php");
echo '<section class="memory-game">';
    for($i=0;$i<count($random);$i++)
    {
        echo '<div class="memory-card" data-framework="' .$random[$i][0]. '">';    
        echo '<img class="back-face"  src="https://vignette.wikia.nocookie.net/yugioh/images/e/e5/Back-EN.png/revision/latest?cb=20100726082133" />
        <img class="front-face" src="' .$random[$i][0]. '" />';
        echo '</div>';
    }


echo '</section>';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <title>Memory Game</title>
</head>
<body>
    
</body>
<script src="app.js"></script>

</html>