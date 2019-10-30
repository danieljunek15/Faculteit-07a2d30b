<?php
echo "mag ik een nummer". PHP_EOL;
$number = readline();
$aws = 1;

for($i = 1; $i <= $number; $i++) {
    $aws = $aws * $i;
}
echo "$aws". PHP_EOL;