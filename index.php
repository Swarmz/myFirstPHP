<?php

$firstName = 'Gavin';
echo 'Hello ' . $firstName; // This way
echo "Hello $firstName"; # This way
echo "Hello {$firstName}"; /* Or
                            This
                            Way */

define('STATUS_PAID', 'paid');

echo STATUS_PAID;
