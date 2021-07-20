<?php

class SimpleClass
{
    // property declaration
    public string $name = 'Hi My Name is Ash';

    // method declaration
    public function displayVar(): void
    {
        for ($count = 0; $count <= 10; $count++) {
            echo $this->name;
        }
    }
}
