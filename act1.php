<?php
$name = "Jade Russel Tesoro";
echo $name;

echo countVowels($name);

function countVowels($name) {
    $name = strtolower($name);
    
    $vowels = array('a', 'e', 'i', 'o', 'u');
    
    $vowelCount = 0;
    
    for ($i = 0; $i < strlen($name); $i++) {
        $char = $name[$i];
        if (in_array($char, $vowels)) {
            $vowelCount++;
        }
    }
    
    return $vowelCount;
}

?>