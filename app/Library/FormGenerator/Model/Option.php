<?php

namespace App\Library\FormGenerator\Model;

class Option extends Forms
{

    public function render(): string {

        $attr = parent::attributesToString();
        return '<option ' . $attr .'/>' . $this->name . '</option>';
    }
}