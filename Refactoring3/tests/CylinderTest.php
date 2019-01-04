<?php

    require __DIR__ . "/../src/Cylinder.php";
    use PHPUnit\Framework\TestCase;


    class CylinderTest extends TestCase
    {
        public function testGetVolume0And0()
        {
            $radius = 0;
            $height = 0;
            $expected = 0;

            $cylinder = new Cylinder();
            $result = $cylinder->getVol($radius, $height);
            $this->assertEquals($expected, $result);
        }

        public function testGetVolume1and2()
        {
            $radius = 1;
            $height = 2;
            $expected = 25.132741228718345 ;
            $cylinder = new Cylinder();
            $result = $cylinder->getVol($radius, $height);
            $this->assertEquals($expected, $result);
        }
    }