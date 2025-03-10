<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function classifyPasswords($passwords) {
        $result = [];

        foreach ($passwords as $password) {
            if (strlen($password) < 8 || !preg_match('/[\W]/', $password)) {
                $result[$password] = "Weak";
            } elseif (strlen($password) >= 12 && preg_match('/\d/', $password) && preg_match('/[\W]/', $password)) {
                $result[$password] = "Strong";
            } elseif (strlen($password) >= 8 && preg_match('/\d/', $password)) {
                $result[$password] = "Moderate";
            } else {
                $result[$password] = "Weak";
            }
        }

        return $result;
    }

    // Example usage
    $passwords = ["password", "Pass1234", "Strong#Pass12", "abc12!", "12345678", "P@ssw0rdStrong"];
    $output = classifyPasswords($passwords);
    print_r($output); 
    ?>   
</body>
</html>