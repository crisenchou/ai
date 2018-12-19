<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Tests\Youtu;


class FacesetTest extends AbstractGatewayTest
{


    protected function gateway()
    {
        return 'faceset';
    }


    public function testGet()
    {

        $res = $this->gateway->get();

        vae_dump($res);exit;

        $this->assertTrue(true);
    }


}