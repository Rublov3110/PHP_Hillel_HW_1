<?php

class DerivedClass extends BaseClass {
    public function printText() {
        echo strtoupper($this->text) . PHP_EOL;
    }
}