<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function getMinimumDenominations($totalAmount, $denominations) {
        rsort($denominations);

        $result = [];
        $totalCount = 0;

        foreach ($denominations as $denomination) {
            if ($totalAmount >= $denomination) {
                $count = intdiv($totalAmount, $denomination);
                $totalAmount -= $count * $denomination;
                $result[$denomination] = $count;
                $totalCount += $count;
            }
        }

        foreach ($result as $denomination => $count) {
            echo "$denomination → $count\n";
        }
        echo "Total Count: $totalCount\n";
    }

    // Example usage
    $totalAmount = 289;
    $denominations = [100, 50, 20, 10, 5, 2, 1];

    getMinimumDenominations($totalAmount, $denominations); 
    ?> 
</body>
</html>