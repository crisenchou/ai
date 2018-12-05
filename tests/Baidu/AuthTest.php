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

class AuthTest extends BaseTest
{


    public function testGetAccessToken()
    {
        $ai = new AI($this->config);
        $driver = $ai->driver;
        $this->assertNotEmpty($driver->accessToken);
    }


    public function testDetect()
    {
        $ai = new AI($this->config);
        $driver = $ai->driver;
        $imageUrl = 'https://aip.bdstatic.com/portal/dist/1543490900641/ai_images/logo.png';
        $response = $driver->gateway('face', 'v3')->url($imageUrl)->detect();
        $this->assertArrayHasKey('code', $response);
    }

    public function testSearch()
    {
        $ai = new AI($this->config);
        $imageUrl = 'https://aip.bdstatic.com/portal/dist/1543490900641/ai_images/logo.png';
        $response = $ai->gateway('face', 'v3')->url($imageUrl)->search([
            'group_id_list' => '1'
        ]);
        $this->assertArrayHasKey('code', $response);
    }

}