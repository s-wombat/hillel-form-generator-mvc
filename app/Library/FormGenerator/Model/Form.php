<?php

namespace App\Library\FormGenerator\Model;

class Form extends Forms
{

    public function render(): string {

        $attr = parent::attributesToString();
        return '<form ' . $attr .'">' . $this->innerItem . '</form>';
    }
}