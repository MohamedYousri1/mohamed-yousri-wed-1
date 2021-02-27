<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table  border="1" cellpadding="3" cellspacing="0">
<?php

    for($i=1;$i<=12;$i++)  // This is Loop To Create Rows In Table 
    {
    echo "<tr>";
    for ($t=1;$t<=12;$t++) // This is Loop To Create Coulmns In Table 
    {
    echo "<td> $i * $t = ". $i*$t . "</td>";
    }
    echo "</tr>";
    }
?>
</body>
</html>