<?php

namespace App\Library\FormGenerator\Model;

use App\Library\FormGenerator\Interface\FormsInterface;

abstract class Forms implements FormsInterface
{
    public function __construct(
        public string $name,
        public array $attributes,
        public string $innerItem
    )
    {}

    abstract public function render(): string;
    public function attributesToString(): string {
        $attr = '';
        foreach ($this->attributes as $key => $val) {
            $attr .= $key . '="' . $val . '" ';
        }
        return $attr;
    }
}