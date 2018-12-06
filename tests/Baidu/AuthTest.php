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

}