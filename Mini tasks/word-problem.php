<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function countWordOccurrences(array $sentences): array {
        $wordCounts = [];
        foreach ($sentences as $sentence) {
            $cleanSentence = strtolower($sentence);
            $cleanSentence = preg_replace('/[^\w\s]/', '', $cleanSentence);
            
            $words = preg_split('/\s+/', $cleanSentence, -1, PREG_SPLIT_NO_EMPTY);
            
            foreach ($words as $word) {
                if (isset($wordCounts[$word])) {
                    $wordCounts[$word]++;
                } else {
                    $wordCounts[$word] = 1;
                }
            }
        }
        return $wordCounts;
    }

    // Example usage:
    $sentences = [
        "The quick fox jumps over the lazy dog",
        "The quick dog is very happy",
        "He is a smart and quick student"
    ];

    print_r(countWordOccurrences($sentences));
    ?>
    
</body>
</html>