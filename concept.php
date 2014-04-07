<?php

$land = filter_input(INPUT_GET, 'land');
$class = filter_input(INPUT_GET, 'class');
$csv_file_location = 'Library/';    //
$command = 'python port_1.py';
$return = false;
$output = false;

exec($command, $output, $return);

echo '<hr/>';
echo $command;
echo '<hr/>';
echo $return;
echo '<hr/>';
print_r($output);
echo '<hr/>';