<?php
function countRating(&$Ra, &$Rb, $Sa, $k = 16): void
{
    $Ea = 1 / (1 + pow(10, (($Rb - $Ra) / 400)));
    $tempRa = $Ra;
    $Ra = round($Ra + $k * ($Sa - $Ea));
    $Rb = round($Rb + $tempRa - $Ra);
}
