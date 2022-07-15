<?php 
class Calculator {
    static public $result;
    static function add($a, $b) {
        //$result = $a + $b;
        echo self::$result = $a + $b. PHP_EOL;
        //return $result;
    }
}

Calculator::add(3, 4);
//echo Calculator::$result;
?>