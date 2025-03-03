<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fibonacci-series.php" method="get">
        Upto which position you want to print the series? : <input type="number" name="pos"> <br>
        <input type="submit">
    </form>
    <?php 
    $pos = $_GET["pos"];
    $first = 0;
    $second = 1;
    if($pos == 1) echo $first;
    else if($pos == 2) echo $second;
    for($i=3;$i<=$pos;$i++){
        $sum = $first + $second;
        $first = $second;
        $second = $sum;
    }
    echo $sum;
    ?>
</body>
</html>