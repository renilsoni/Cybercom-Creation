<?php

class Example {

    public function __construct($text) {
        $this->SaySomething($text);
    }

    public function SaySomething($text) {
        echo $text;
    }
}

$class = new Example('Hello Welcome');
//$class->SaySomething();
?>