<? include "./partials/header.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<ul>
        <h1><?=$profile->name?></h1><br><br>
        <h3>Age:</h3><div class="shadow p-3 mb-5 bg-light rounded"><?=$age?></div>
        <h3>Bio:</h3><div class="shadow p-3 mb-5 bg-light rounded"><?=$profile->bio?></div>
        <h3>Interests:</h3><div class="shadow p-3 mb-5 bg-light rounded"><?=$profile->interests?></div>

            <?php 
                if($dateMatch===$date) { 
                     ?><div class="shadow p-3 mb-5 bg-light rounded"><h4>Happy Birthday!</h4></div><?
                }
            
         ?>
            
</body>
</html>