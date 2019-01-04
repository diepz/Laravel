<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 02/11/2018
 * Time: 15:16
 */

    include_once ('Node.php');

    class LinkList
    {
        private $fistNode;
        private $lastNode;
        private $count;

        function __construct()
        {
            $this->firstNode = NULL;
            $this->lastNode = NULL;
            $this->count = 0;
        }

        public function insertFirst($data)
        {
            $link = new Node($data);
            $link->next = $this->firstNode;
            $this->firstNode = $link;

            if ($this->lastNode == NULL) {
                $this->lastNode = $link;
            }

            $this->count++;
        }


        public function insertLast($data)
    {
        if ($this->fistNode != NULL)
        {
            $link = new Node($data);
            $this->lastNode->next = $link;
            $link->next = NULL;
            $this->lastNode = $link;
            $this->count++;
        }
        else {
            $this->insertFirst($data);
        }
    }

    public function totalNodes()
    {
        return $this->count;
    }
    public function readList()
    {
        $listData = array();
        $current = $this->firstNode;

        while($current != NULL)
        {
            array_push($listData, $current->readNode());
            $current = $current->next;
        }
        return $listData;
    }
    }

