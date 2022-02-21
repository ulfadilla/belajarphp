<?php
$hari = ["senin", "selasa", "rabu"];

//echo $hari[0];
//echo <br>;

//echo $hari[1];
//echo <br>;

//echo $hari[2];
//echo <br>;
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Array Dalam PHP</title>
</head>
<body>
    <H3> NAMA NAMA HARI </H3>
    <?php for ($i = 0; $i < 3; $i++) {?>
        <div>
            <?php echo $hari[$i]; ?>
        </div>
    <?php } ?>
</body>
</html>