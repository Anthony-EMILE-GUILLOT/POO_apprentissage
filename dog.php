<?php

class Dog extends Animal {
    
    public function __construct(string $name, int $age, string $color) {
        parent::__construct($name, $age, $color);
    }

}
