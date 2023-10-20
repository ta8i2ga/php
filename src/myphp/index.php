<?php

$nowtime = new DateTime();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="nowtimes">
        <p>現在の日時は</p>
        <p><?php echo $nowtime->format("H時i分s秒"); ?></p>
        <p>でした</p>
    </div>

</body>

</html>
