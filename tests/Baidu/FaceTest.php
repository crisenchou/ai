<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-5
 * description:
 */



namespace Crisen\AI\Tests\Baidu;


use Crisen\AI\AI;
use Crisen\AI\Tests\BaseTest;


class FaceTest extends BaseTest
{

    public function testFace()
    {
        $ai = new AI($this->config);
        $gateway = $ai->gateway('face');
        $this->assertInstanceOf(GatewayTest::class, $gateway);
        $data = $ai->gateway('face')->url('www.crisen.org/favicon.ico')->detect();
        var_dump($data);
        $data = $ai->gateway('face', 'v2')->url('www.crisen.org/favicon.ico')->detect();
        var_dump($data);
        $data = $ai->gateway('imageSearch')->url('www.crisen.org/favicon.ico')->detect();
        var_dump($data);
    }
}