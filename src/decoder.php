<?php

require_once 'RC4.php';

if($argc < 4)
{
    print($argv[0] . ' [key] [input] [output]');
    exit(-1);
}

list($key, $input, $output) = [$argv[1], $argv[2], $argv[3]];
$data = file_get_contents($input);
$data = RC4::calc($data, $key);
file_put_contents($output, $data);
