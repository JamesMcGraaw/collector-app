<?php

function intToBritDate($intDate) {
    $timestamp = strtotime($intDate);
    return date("d-M-Y", $timestamp);
}