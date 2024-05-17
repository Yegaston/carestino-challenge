<?php

/**
 * Implemente groupByOwners:
 * Qué acepte un array asociativo que contiene el nombre del archivo y el propietario
 * Qué devuelva un array asociativo que contenga un array de nombre de archivo para cada propietario en cualquier orden.
 * Por ejemplo. Para
$files = [
"Input.txt" => "Randy",
"Code.py" => "Stan",
"Output.txt" => "Randy"
];

 * Devolverá:
$files = [
"Randy" => [“Input.txt”, "Output.txt"],
"Stan" => [“Code.py”]
];

 */

class Problem
{
    public static function groupByOwners(array $files): array
    {
        $personFiles = [];

        foreach ($files as $file => $person) {
            if (!array_key_exists($person, $personFiles)) {
                $personFiles[$person] = [$file];
            }

            else

            if (array_key_exists($person, $personFiles)) {
                array_push($personFiles[$person], $file);
            }

        }

        return $personFiles;
    }
}

$files = [
    "Input.txt" => "Randy",
    "Code.py" => "Stan",
    "Output.txt" => "Randy"
];

var_dump(Problem::groupByOwners($files));
