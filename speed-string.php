<?php

const DECIMALS_COUNT = 15;

$getMicroTime = microtime(true);

function string()
{
    return "Time spend";
}

echo string();
echo "<br>Current spent time:  " . number_format((microtime(true) - $getMicroTime), DECIMALS_COUNT) . " sec.";
