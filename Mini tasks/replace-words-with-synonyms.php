<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function replaceWordsWithSynonyms($sentences, $synonymDictionary) {
        $result = [];

        foreach ($sentences as $sentence) {
            $words = explode(' ', $sentence);
            foreach ($words as &$word) {
                $cleanWord = preg_replace('/[^\w]/', '', $word);
                if (array_key_exists($cleanWord, $synonymDictionary)) {
                    $word = str_replace($cleanWord, $synonymDictionary[$cleanWord], $word);
                }
            }
            $result[] = implode(' ', $words);
        }

        return $result;
    }

    // Example usage
    $sentences = ["The quick fox jumps over the lazy dog", "She is very happy today", "He is a smart student"];
    $synonymDictionary = ["quick" => "fast", "happy" => "joyful", "smart" => "intelligent"];

    $output = replaceWordsWithSynonyms($sentences, $synonymDictionary);
    print_r($output);
    ?>   
</body>
</html>