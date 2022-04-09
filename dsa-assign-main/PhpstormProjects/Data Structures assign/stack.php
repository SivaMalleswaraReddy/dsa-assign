<?php

class Stack
{
    public $stack;
    public $capacity;
    public $element ;

    public function __construct()
    {
// initialize the stack with an empty array
        $this->stack = array();
// stack can only contain this many elements
        $this->capacity = 10;
    }

    public function push()
    {
// check for stack overflow
        if (count($this->stack) < $this->capacity) {
// prepend element to the start of the stack array
            array_unshift($this->stack, $this->element);
        } else {
            throw new RuntimeException('Stack overflow!!!');
        }
    }

    public function pop()
    {
// check for stack underflow
        if (empty($this->stack)) {
            throw new RuntimeException('Stack underflow!!!');
        } else {
// pop an element from the start of the stack array
            return array_shift($this->stack);
        }
    }
    public function reverse()
    {
    print_r (array_reverse($this->stack));
    }



    public function peek()
    {
        return current($this->stack);
    }

    public function printStack()
    {
        print_r($this->stack);
    }
}




//$removed_ele = $stack->pop();
//print("Popped element: " . $removed_ele . "\n");
//$stack->printStack();

//$peeked_ele = $stack->peek();
//print("Top element: " . $peeked_ele . "\n");
