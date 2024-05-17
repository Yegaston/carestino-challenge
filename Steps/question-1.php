<?php

/**
 * Encuentras algún error en este método?
 */

class Problem
{
    static function average($a, $b)
    {
        return ($a + $b) / 2; // El error era la operacion
    }
}

echo Problem::average(2, 1);


