<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            width:100%;
            height:1%;
        }
        body{
            height: 1080px;
            margin:0;
            font-size:1px;
        }
    </style>
</head>
<body>
    <?php
        $arraycolor = [];
        for($i = 0; $i < 10; $i++){
            $r = rand(0,255);
            $g = rand(0,255);
            $b = rand(0,255);
            $arraycolor[$i]="background-color:rgb($r,$g,$b)";
        }
        for($i = 0; $i < 10; $i++){
            for($j = 0; $j < 10; $j++){
                echo "<div style=\"" . $arraycolor[$j] . "\"></div>";
            }
        }
    ?>
</body>
</html>