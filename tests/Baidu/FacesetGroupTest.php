<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-7
 * description:
 */

namespace Crisen\AI\Tests\Baidu;


class FacesetGroupTest extends GatewayTest
{

    protected function gateway()
    {
        return 'faceset.group';
    }


    public function testGet()
    {
        $this->gateway->get();
    }

    public function testAdd()
    {
        $this->gateway->add();
    }


    public function testDelete()
    {
        $this->gateway->delete();
    }
}