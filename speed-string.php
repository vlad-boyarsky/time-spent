<?php

const DECIMALS_COUNT = 15;

function string()
{
    return "Time spend";
}

$getMicroTime = microtime(true);
echo string();
echo "<br>Current spent time:  " . number_format((microtime(true) - $getMicroTime), DECIMALS_COUNT) . " sec.";