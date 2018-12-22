<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Tests\Tencent;


class OcrTest extends AbstractGatewayTest
{


    protected function gateway()
    {
        return 'ocr';
    }


    public function testGeneral()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->general();
        $this->assertSuccess($res);
    }

    public function testHandwriting()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->handwriting();
        $this->assertSuccess($res);
    }

    public function testIdcard()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->idcard([
            'card_type' => 0
        ]);
        $this->assertSuccess($res);
    }

    public function testBc()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->bc();
        $this->assertSuccess($res);
    }


    public function testBizlicense()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->bizlicense();
        $this->assertSuccess($res);
    }


    public function testCreditcard()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->creditcard();
        $this->assertSuccess($res);
    }

    public function testPlate()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->plate();
        $this->assertSuccess($res);
    }

    public function testDriverlicense()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->driverlicense([
            'type' => 1
        ]);
        $this->assertSuccess($res);
    }
}