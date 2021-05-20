<?php

namespace Oinpentuls\Kalkulator;

class BasicCalculator
{
    public static function add(array $data)
    {
        return array_sum($data);
    }

    public static function multiplpy(array $data)
    {
        return array_product($data);
    }
}
