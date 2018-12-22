<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Tests\Tencent;


class ImageTest extends AbstractGatewayTest
{

    protected function gateway()
    {
        return 'image';
    }


    public function testFuzzy()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->fuzzy();
        $this->assertSuccess($res);
    }


    public function testFood()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->food();
        $this->assertSuccess($res);
    }

    public function testTag()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->tag();
        $this->assertSuccess($res);
    }


    public function testTerrorism()
    {
        $res = $this->gateway->base64($this->imageBase64Code())->terrorism();
        $this->assertSuccess($res);
    }


}