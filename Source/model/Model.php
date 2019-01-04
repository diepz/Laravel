<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 12/11/2018
 * Time: 08:45
 */

include_once ('Person.php');
    class Model
    {
        public function getPersonList()
        {
            return array(
                'Điệp Z' => new Person('Điệp Z', '1996', 'đẹp trai nhất vũ trụ'),
                'Linh xz' => new Person('Linh xz', '1994', 'Xấu trai nhất vũ trụ'),
                'Trinh ' => new Person('Trinh', '2000', 'xinh nhất vũ trụ')
            );
        }

        public function  getPerson($name) {
            $allPerson = $this->getPersonList();
            return $allPerson[$name];
        }
    }