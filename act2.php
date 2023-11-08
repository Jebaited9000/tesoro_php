<?php

$n2 = 5;
function geo($n)
{
    for ($i = 0; $i < $n; $i++)
    {
        $n2 = 1 * pow(2, $i);
        echo $n2, " ";
    }
}
    geo($n2);

?>