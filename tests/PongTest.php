<?php
namespace XigenTest;

class PongTest extends \PHPUnit_Framework_TestCase
{
    protected function setup()
    {
        global $Data;
        $this->ESM = loadESMSDK($Data);
    }

    public function testPong()
    {
        $this->ESM->testConnection();
        $test = $this->ESM->getRequestData();

        $this->assertEquals($test->msg, "Pong");
        $this->assertEquals(
            $test->payload->Ping,
            "Pong"
        );
    }
}
