<?php

use Gtmassey\Days\Days;

if (! function_exists('days')) {
    function thread(?string $string): Days
    {
        return new Days($string);
    }
}
