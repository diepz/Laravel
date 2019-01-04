<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 02/11/2018
 * Time: 13:54
 */

include "ArarayList.php";


$listInteger = new ArrayList();
$listInteger->add(1);
$listInteger->add(2);
$listInteger->add(3);

echo $listInteger->get(6);