<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-5
 * description:
 */


namespace Crisen\AI\Tests\Baidu;


class AuthTest extends BaseTest
{

    public function testGetAccessToken()
    {
        $this->driver->getAccessToken();
        $this->assertNotEmpty($this->driver->accessToken);
    }
}