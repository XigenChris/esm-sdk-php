<?php
namespace XigenTest;

class ClientTest extends \PHPUnit_Framework_TestCase
{
    protected function setup()
    {
        global $Data;
        $this->ESM = loadESMSDK($Data);
    }

    public function testGet25ClientUsers()
    {
        $this->ESM->clientUsersGetAll();
        $test = $this->ESM->getRequestData();
        $count = count($test->payload->Data);
        $this->assertEquals(25, $count);
    }

    public function testGet50ClientUsers()
    {
        $this->ESM->clientUsersGetAll(0, 50);
        $test = $this->ESM->getRequestData();
        $count = count($test->payload->Data);
        $this->assertEquals(50, $count);
    }
}
