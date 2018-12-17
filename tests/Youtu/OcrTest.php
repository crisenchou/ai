<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Tests\Youtu;


class OcrTest extends AbstractGatewayTest
{


    protected function gateway()
    {
        return 'ocr';
    }


    public function testGeneral()
    {
        $this->assertTrue(true);
    }
}