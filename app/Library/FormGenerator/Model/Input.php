<?php

namespace App\Library\FormGenerator\Model;

class Input extends Forms
{

    public function render(): string {

        $attr = parent::attributesToString();
        return '<input ' . $attr .'/>';
    }

}