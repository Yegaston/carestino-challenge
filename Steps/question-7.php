<?php

/**
 * Siguiendo el principio de responsabilidad Única (SRP) que es la S del Principio SOLID
 * donde nos dice que una clase debe tener un único motivo por el cual debe ser modificada:
 * Qué cambios le harías a esta clase?
 */



 // This class handle the responses and abstract product of making transofrmations into json.
class JsonProductFormatter
{
    public function JsonProductFormatter(Product $product)
    {
        return json_encode($product->getName());
    }
}


class Product extends JsonProductFormatter
{
    private $name;

    public function getName(): string
    {
        return $this->name;
    }
}
