<?php

namespace App\Library\FormGenerator\Interface;
interface FormsInterface
{
    public function render(): string;
    public function attributesToString(): string;
}