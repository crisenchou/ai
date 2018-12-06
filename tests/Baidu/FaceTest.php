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

    protected $gateway;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->gateway = (new AI($this->config))->gateway('face');
    }


    public function testGateway()
    {
        $this->assertInstanceOf(GatewayTest::class, $this->gateway);
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

    private function imageUrl()
    {
        return 'https://aip.bdstatic.com/portal/dist/1543490900641/ai_images/logo.png';
    }
}