<?php

    include_once ('LinkList.php');

    $linkedList = new LinkList();

    $linkedList->insertFirst(55);
    $linkedList->insertFirst(66);
    $linkedList->insertLast(77);
    $linkedList->insertLast(88);

    $totalNodes = $linkedList->totalNodes();
    $linkData = $linkedList->readList();
//    echo $totalNodes;
    echo implode ('-' , $linkData);