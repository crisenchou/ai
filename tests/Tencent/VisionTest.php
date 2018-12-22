<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-22
 * description:
 */

namespace Crisen\AI\Tests\Tencent;


class VisionTest extends AbstractGatewayTest
{


    protected function gateway()
    {
        return 'vision';
    }


    public function testPorn()
    {

        $res = $this->gateway->base64($this->imageBase64Code())->porn();
        $this->assertSuccess($res);
    }

    public function testObject()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->object([
            'format' => 1,
            'topk' => 1
        ]);
        $this->assertSuccess($res);
    }

    public function testScener()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->scener([
            'format' => 1,
            'topk' => 1
        ]);
        $this->assertSuccess($res);
    }

    public function testImgFilter()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->imgFilter([
            'filter' => 1
        ]);
        $this->assertSuccess($res);
    }

    public function testImgToText()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->imgToText([
            'session_id' => mt_rand(10000000, 99999999),
        ]);
        $this->assertSuccess($res);
    }

}