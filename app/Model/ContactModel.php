<?php

namespace App\Model;

class ContactModel
{
    public string $name;
    public string $email;


    public function loadData(array $data): void
    {
        foreach ($data as $key => $value) {
            if (property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }

    public function validate(): bool
    {
        if (!$this->name) {
            throw new \Exception('Full Name not initialized');
        }

        if (!$this->email) {
            throw new \Exception('Email not initialized');
        }

        return true;
    }
}