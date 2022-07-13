<?php

class DoublyLinkedListNode {
    public $data;
    public $next;
    public $prev;

    public function __construct($node_data)
    {
        $this->data = $node_data;
        $this->next = null;
        $this->prev = null;
    }
}

class DoublyLinkedList {
    public $head;
    public $tail;

    public function __construct()
    {
        $this->head = null;
        $this->tail = null;
    }

    public function insertNode($node_data)
    {
        $node = new DoublyLinkedListNode($node_data);

        if (is_null($this->head)) {
            $this->head = $node;
        } else {
            $this->tail->next = $node;
            $node->prev = $this->tail;
        }

        $this->tail = $node;
    }
}

function printDoublyLinkedList($node, $sep, $fptr)
{
    while (!is_null($node)) {
        fwrite($fptr, $node->data);


        $node = $node->next;

        if (!is_null($node)) {
            fwrite($fptr, $sep);
        }
    }
}

/*
 * Complete the 'reverse' function below.
 *
 * The function is expected to return an INTEGER_DOUBLY_LINKED_LIST.
 * The function accepts INTEGER_DOUBLY_LINKED_LIST llist as parameter.
 */

/*
 * For your reference:
 *
 * DoublyLinkedListNode {
 *     int data;
 *     DoublyLinkedListNode next;
 *     DoublyLinkedListNode prev;
 * }
 *
 */

function reverse($llist) {
    $head = $llist;
    $prev = null;

    while ($head !== null) {
        $subNode = $head->next;
        $head->next = $prev;
        $prev = $head;
        $head = $subNode;
    }

    $llist = $prev;
    return $llist;
}
