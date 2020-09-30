<?php

class Stack
{
    private $myArray;

    public function __construct()
    {
        $this ->myArray = array();
    }

    public function enstack($items)

        {
            array_push($this->myArray,$items);
        }

    public function DeStack()
        {

            if (!empty(end($this->myArray)))
            {
                $r = end($this->myArray);
                array_pop($this->myArray);
                return $r;


            }
            return null;
        }

}
$stack = new Stack();

$stack->enStack(4);
$stack->enStack(3);
$stack->enStack(2);
$stack->enStack(1);

var_dump($stack->DeStack());
var_dump($stack->DeStack());
var_dump($stack->DeStack());
var_dump($stack->DeStack());

?>