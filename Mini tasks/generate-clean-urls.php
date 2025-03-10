<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function generateCleanUrls($titles) {
        $result = [];

        foreach ($titles as $title) {
            $cleanTitle = strtolower($title);

            $cleanTitle = str_replace(' ', '-', $cleanTitle);

            $cleanTitle = preg_replace('/[^a-z0-9\-]/', '', $cleanTitle);

            $cleanTitle = substr($cleanTitle, 0, 50);

            $cleanTitle = rtrim($cleanTitle, '-');

            $result[] = $cleanTitle;
        }

        return $result;
    }

    // Example usage
    $titles = ["How to Learn JavaScript in 2024!!"];
    $output = generateCleanUrls($titles);
    print_r($output); 
    ?>
</body>
</html>