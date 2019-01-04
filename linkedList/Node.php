<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 02/11/2018
 * Time: 15:14
 */

//    class Node
//    {
//        public $data;
//        public $next;
//
//        function  __construct($data)
//        {
//            $this->data = $data;
//            $this->next = NULL;
//        }
//
//        function readNode()
//        {
//            return $this->data;
//        }
//    }

class Node
{
    /* Node data */
    public $data;
    /* Link to next node */
    public $next;
    function __construct($data)
    {
        $this->data = $data;
        $this->next = NULL;
    }
    function readNode()
    {
        return $this->data;
    }
}
