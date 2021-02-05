<?php

class Circle  {
    const pi = 3.141;
    public function Area($radius) {
        return self::pi * ($radius * $radius); //use of const variable you can use 'self::'
    }
}

$circle = new Circle;
echo $circle->Area(100);

// 

?>