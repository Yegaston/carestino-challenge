<?php

/**
 * La interface de usuarios contiene dos tipos de controles de entrada.
 * TextInput, acepta todos los tipos
 * NumericInput que solo acepta dígitos.
 * Implemente la clase TextInput que contenga:
 * - Un método add($text) que agrega el texto dado al actual valor
 * - Un método getValue() que devuelva el actual valor
 *
 * Implemente la clase NumericInput que contenga:
 * - Hereda de TextInput
 * - El método add ignorará todo parámetro $text que no sea numérico
 */

class TextInput
{

    private $text;

    public function add(string $text)
    {
        $this->text = $this->text . strval($text);
    }

    public function getValue(): string
    {
        return $this->text;
    }
}

class NumericInput extends TextInput
{

    public function add($text)
    {
        if (is_numeric($text)) {
            parent::add($text);
        }
    }
}

$input = new NumericInput();
$input->add('1');
$input->add('a');
$input->add('532');
echo $input->getValue(); //print 1532
