<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-7
 * description:
 */


namespace Crisen\AI\Tests\Baidu;

class FacesetTest extends GatewayTest
{
    protected function gateway()
    {
        return 'faceset';
    }

    public function testGet()
    {
        $res = $this->gateway->get();
        $this->assertSuccess($res);
    }


    public function testUsers()
    {
        $res = $this->gateway->users();
        $this->assertSuccess($res);
    }


    public function testDelete()
    {
        $res = $this->gateway->delete();
        $this->assertSuccess($res);
    }
}