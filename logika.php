<?php
for ($i = 1; $i <= 100; $i++) {
    $output = $i;
    if ($i % 3 == 0 && $i % 5 == 0) {
        $output .= ' FizzBuzz';
    } elseif ($i % 3 == 0) {
        $output .= ' Fizz';
    } elseif ($i % 5 == 0) {
        $output .= ' Buzz';
    }
    echo $output . "\n";
}
?>
