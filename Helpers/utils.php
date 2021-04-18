<?php

function readJson($path)
{
    $json = fopen($path, 'r');
    return json_decode(fread($json, filesize($path)), true);
}
