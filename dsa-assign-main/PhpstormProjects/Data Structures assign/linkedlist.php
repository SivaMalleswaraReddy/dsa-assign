<?php
/**
 * Class to represent a node of the linked list
 */
class Node
{
    public $data;
    public $next;

    public function __construct($item)
    {
        $this->data = $item;
        $this->next = null;
    }
}

/**
 * Class to represent a linked list
 */
class MyLinkedList
{
    public $head = null;// instance variable
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

    public function insertAtLast($newItem)
    {
        if ($this->head === null) { // if the linked list is empty
            $this->head = new Node($newItem);
        } else { // when the linked list is non-empty
            $current = $this->head;

            while ($current->next != null) {
                $current = $current->next;
            } // after while loop terminates, current points to the last Node

            $current->next = new Node($newItem);
        }

        self::$count++;
    }

    public function delete($item)
    {
        $current = $previous = $this->head;

        while ($current->data != $item) {
            $previous = $current;
            $current = $current->next;
        }

// if you are deleting the first node of the linked list
        if ($current == $previous) {
            $this->head = $current->next;
        }

        $previous->next = $current->next;

        self::$count--;
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
            $str .= $item . '->';
        }

        echo $str;
        echo PHP_EOL;
    }

    //Inserting at the Kth index Postion

    public function insertAtKthPos($item,$key){
        if($key==0){
            $this->insertAtFirst($item);
        }
        else{
            $link=new Node($item);
            $current = $this->head;
            $previous = $this->head;
            for($i=0;$i<$key;$i++){
                $previous=$current;
                $current=$current->next;
            }
            $previous->next = $link;
            $link->next = $current;

            self::$count++;
        }
    }
    public function deleteList($pos){
        if($pos <1){
            echo "\nposition should be >= 1.";
        } else if ($pos== 1 && $this->head != null) {
            $nodeToDelete = $this->head;
            $this->head = $this->head->next;
            $nodeToDelete = null;
        } else {
            $temp = new Node();
            $temp = $this->head;
            for($i = 1; $i < $pos-1; $i++) {
                if($temp != null) {
                    $temp = $temp->next;
                }
            }
            if($temp != null && $temp->next != null) {
                $nodeToDelete = $temp->next;
                $temp->next = $temp->next->next;
                $nodeToDelete = null;
            } else {
                echo "\nThe node is already null.";
            }
        }
    }

}

$my_list = new MyLinkedList();

$my_list->insertAtFirst(20);
$my_list->insertAtLast(40);
$my_list->insertAtKthPos(25,1);
$my_list->insertAtKthPos(50,2);
$my_list->insertAtKthPos(75,3);
$my_list->insertAtKthPos(100,4);
$my_list->printList();
$my_list->deleteList(2);
$my_list->printList();



