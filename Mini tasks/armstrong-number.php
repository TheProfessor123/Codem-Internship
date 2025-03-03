<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="armstrong-number.php" method="get">
        Check number is a armstrong num or not? : <input type="number" name="arm-num"> <br>
        Enter the number of digits : <input type="number" name="size"> <br>
        <input type="submit">
    </form>
    <?php 
    $arm_num = $_GET["arm-num"];
    $size = $_GET["size"];
    $original_num = $arm_num;
    $res = 0;
    while($arm_num!=0){
        $r=$arm_num % 10;
        $res=pow($r, $size)+$res;
        $arm_num=floor($arm_num/10);
    }
    if($res==$original_num) echo "true";
    else echo "false";
    ?>
</body>
</html>