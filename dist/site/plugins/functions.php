<?php

/**
 * Format phone number
 *
 * @var int, float
 */

function formatPhone( $number ) {
    echo preg_replace("/[^0-9]/", "", $number);
}

?>
