<?php 

$developers  = [
    [
        'name'  => 'Mohamed Yousri' , 
        'Job'   => 'Front-End' , 
        'Experience'=> 2
    ],
    [
        'name'  => 'Mohamed Ahmed' , 
        'Job'   => 'Back-End' , 
        'Experience'=> 1
    ],
    [
        'name'  => 'Ahmed mohamed' , 
        'Job'   => 'Full-Stack' , 
        'Experience'=> 2
    ],
    [
        'name'  => 'Rahma Mohamed' , 
        'Job'   => 'Front-End' , 
        'Experience'=> 2
    ],
    [
        'name'  => 'Aya Ahmed' , 
        'Job'   => 'Front-End' , 
        'Experience'=> 2
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
        body{background  :#222}
        .card ul li:last-child::after{
            content: 'Years Of Experience   ' ; 
        }
    </style>
</head>
<body>
<div class="card text-center " style="width : 40%  ; margin:auto ; padding : 20px " >
    <?php for($i = 0 ; $i < count($developers); $i++) {?>
        <ul class="list-group list-group-flush">
            <?php foreach($developers[$i] as $key => $value){ ?>
                <li class="list-group-items"><?=  $value ?></li>
            <?php } ?>
        </ul>
    <?php } ?> 
</div>
</body>
</html>