<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-5
 * description:
 */


namespace Crisen\AI\Tests\Baidu;


use Crisen\AI\Drivers\Baidu\Gateways\AbstractBaiduGateway;

class FaceTest extends GatewayTest
{

    public function gateway()
    {
        return 'face';
    }

    public function testGateway()
    {
        $this->assertInstanceOf(AbstractBaiduGateway::class, $this->gateway);
    }

    public function testDetect()
    {

        $response = $this->gateway->url($this->imageUrl())->detect();
        $this->assertSuccess($response);
    }


    public function testMatch()
    {
        $response = $this->gateway->url($this->imageUrl())->match();
        $this->assertSuccess($response);
    }


    public function testSearch()
    {
        $response = $this->gateway->url($this->imageUrl())->search([
            'group_id_list' => '1'
        ]);
        $this->assertSuccess($response);
    }


    public function testVerify()
    {
        $response = $this->gateway->url($this->imageUrl())->verify([
            'id_card_number' => '40000xxxxxxxxxxxx',
            'name' => 'crisen'
        ]);
        $this->assertSuccess($response);
        $response = $this->gateway->url($this->imageUrl())->verify([
            'id_card_number' => '40000xxxxxxxxxxxx',
            'name' => 'crisen'
        ], 'face');
        $this->assertSuccess($response);
    }
    
    public function testPersonVerify()
    {
        $response = $this->gateway->url($this->imageUrl())->personVerify([
            'id_card_number' => '40000xxxxxxxxxxxx',
            'name' => 'crisen'
        ]);
        $this->assertSuccess($response);
    }

    public function testFaceVerify()
    {
        $response = $this->gateway->url($this->imageUrl())->faceVerify();
        $this->assertSuccess($response);
    }

    private function imageUrl()
    {
        return 'https://aip.bdstatic.com/portal/dist/1543490900641/ai_images/logo.png';
    }
}