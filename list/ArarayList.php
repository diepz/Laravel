<?php


    class ArrayList
    {
        public $arryList;

        public function ArrayList($arr = '')
        {
            if (is_array($arr) == true) {
                $this->arryList = $arr;
            } else {
                $this->arryList = array();
            }
        }


        public function add($obj)
        {
            array_push($this->arryList, $obj);
        }

        public function size()
        {
            return count($this->arryList);
        }

        public function get($index)
        {
            if ($this->isInteger($index) && $index < $this->size()) {
                return $this->arryList[$index];
            } else {
                die("ERROR in ArrayList.get");
            }


        }

        public function remove($index)
        {
            if ($this->isInteger($index)) {
                $newArrayList = array();
                for ($i = 0; $i < $this->size(); $i++)
                    if ($index != $i) $newArrayList[] = $this->get($i);
                $this->arrayList = $newArrayList;
            } else {
                die("ERROR in ArrayList.remove <br> Integer value required");
            }

        }

        public function isInteger($toCheck)
        {
            return preg_match("/^[0-9]+$/", $toCheck);
        }

    }
?>
