<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */


namespace Crisen\AI\Tests;


use Crisen\AI\AI;
use Crisen\AI\Contracts\DriverInterface;
use Crisen\AI\Contracts\GatewayInterface;


class AITest extends BaseTest
{


    public function testDriver()
    {
        $ai = new AI($this->config);
        $this->assertInstanceOf(AI::class, $ai);
        $this->assertInstanceOf(DriverInterface::class, $ai->driver);
    }

}