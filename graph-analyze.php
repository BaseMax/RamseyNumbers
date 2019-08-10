<?php
$input=file_get_contents("graph-result.txt");
preg_match_all('/===>([0-9]+)/i', $input, $output);
sort($output[1]);
print_r($output[1]);
