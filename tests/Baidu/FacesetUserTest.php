<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-7
 * description:
 */

namespace Crisen\AI\Tests\Baidu;


class FacesetUserTest extends GatewayTest
{
    protected function gateway()
    {
        return 'faceset.user';
    }


    public function testGet()
    {
        $res = $this->gateway->get();
        $this->assertSuccess($res);
    }

    public function testAdd()
    {
        $res = $this->gateway->add();
        $this->assertSuccess($res);
    }


    public function testCopy()
    {
        $res = $this->gateway->copy();
        $this->assertSuccess($res);
    }


    public function testDelete()
    {
        $res = $this->gateway->delete();
        $this->assertSuccess($res);
    }


}