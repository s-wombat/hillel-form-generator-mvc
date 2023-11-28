<?php

namespace App\Library\FormGenerator\Model;

class Label extends Forms
{

    public function render(): string {

        $attr = parent::attributesToString();
        return '<label ' . $attr .'>' . $this->name . '</label>';
    }

}