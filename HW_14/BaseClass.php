<?php
class BaseClass {
    protected $text = "some text";

    public function printText() {
        echo ucfirst($this->text) . PHP_EOL;
    }
}
class DerivedClass extends BaseClass {
    public function printText() {
        echo strtoupper($this->text) . PHP_EOL;
    }
}