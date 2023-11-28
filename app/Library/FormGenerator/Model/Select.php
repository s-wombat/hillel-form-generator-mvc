<?php

namespace App\Library\FormGenerator\Model;

class Select extends Forms
{

    public function render(): string {

        $attr = parent::attributesToString();
        return '<select ' . $attr .'/>' . $this->innerItem . '</select>';
    }
}