<?php

class StopWatch
{
    public $starttime;
    private $endtime;

    function __construct($starttime,$endtime)
    {
        $this->starttime = $starttime;
        $this->endtime = $endtime;
    }


    public function getStartTime()
    {
        $this->starttime = date("h:m:s");

        return  $this->starttime;
    }

    private function getEndTime()
    {
        $this->endtime = date("h:m:s");
        return  $this->endtime;
    }

    function start()
    {

        return  date("h:m:s");
    }

    function stop()
    {
        return  date("h:m:s");
    }

    function getElapsedTime()
    {
        return date("s");
    }


}

$StopWatch = new StopWatch(1,2);
echo $StopWatch->getElapsedTime();
echo "<br>";
echo $StopWatch->start();
echo "<br>";




?>