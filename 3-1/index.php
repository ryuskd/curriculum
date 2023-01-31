<?php
    $i = 0;
    $j = 0;
    $k = 0;
    define('BRtag','<br>');
    for ($i=1;$i<=100;$i++) {
        $j = $i%3;
        $k = $i%5;
        if ($j === 0 && $k === 0) {
            echo 'FizzBuzz!!'.BRtag;
        } elseif ($j === 0) {
            echo 'Fizz!'.BRtag;
        } elseif ($k === 0) {
            echo 'Buzz!'.BRtag;
        } else {
            echo $i.BRtag;
        }
    }
?>