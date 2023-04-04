<?php

function intToBritDate(string $intDate): string {
    $timestamp = strtotime($intDate);
    return date("d M Y", $timestamp);
}