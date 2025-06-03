<?php
$a = $_POST["a"];
$b = $_POST["b"];
$c = $_POST["c"];

$a = escapeshellarg($a);
$b = escapeshellarg($b);
$c = escapeshellarg($c);

$command = "python3 calculate.py $a $b $c";
$output = shell_exec($command);

echo $output;
?>