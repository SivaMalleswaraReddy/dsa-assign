<?php

class Node
{
    public $data;
    public $next;
    public $prev;

    public function __construct($item)
    {
        $this->data = $item;
        $this->next = null;;
        $this->prev = null;
    }
}

class MyDoublyLinkedList
{
    public $head = null;
    public $tail = null;// instance variable
    private static $count = 0; // static variable

    /**
     * Getter function for count of nodes
     *
     * @return int
     */
    public function getCount()
    {
        return self::$count;
    }

    /**
     * Insertion at the beginning of the linked list
     *
     * @param mixed $newItem
     * @return void
     */
    public function insertAtFirst($newItem)
    {
        if ($this->head === null) { // if the linked list is empty
            $this->head = new Node($newItem);
        } else { // when the linked list is non-empty
            $temp = new Node($newItem);
            $temp->next = $this->head;
            $this->head = $temp;
        }

        self::$count++;
    }


    public function printList()
    {
        $items = [];
        $current = $this->head;
        while ($current != null) {
            array_push($items, $current->data);
            $current = $current->next;
        }

        $str = '';
        foreach ($items as $item) {
            $str .= $item . '<->';
        }

        echo $str;
        echo PHP_EOL;
    }
    public function insertAtLast($newItem)
    { if ( $this->tail === null) { // if the linked list is empty
        $this->head = new Node($newItem);
    } else { // when the linked list is non-empty
        $this->tail->next = new Node($newItem);
        $this->tail = new Node($newItem);
    }

        self::$count++;
    }

}
$my_list = new MyDoublyLinkedList();

$my_list->insertAtFirst(20);
$my_list->insertAtFirst(25);
$my_list->insertAtLast(30);
$my_list->insertAtLast(35);
$my_list->printList();
