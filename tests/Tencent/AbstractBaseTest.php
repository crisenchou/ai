<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Tests\Tencent;


use Crisen\AI\AI;
use Crisen\AI\Drivers\Tencent\TencentResponse;
use Crisen\AI\Tests\TestCase;

abstract class AbstractBaseTest extends TestCase
{
    protected $log = true;
    protected $driver;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $default = require dirname(__DIR__) . '/config/config.php';
        $env = require dirname(__DIR__) . '/config/env.php';
        $config = $default['tencent'];
        if (is_array($env)) {
            $config = array_merge($default['tencent'], $env['tencent']);
        }
        $this->driver = AI::tencent($config);
    }


    public function assertSuccess(TencentResponse $response)
    {
        if ($this->log) {
            var_dump($response->getErrMsg());
        }
        $this->assertTrue(is_array($response->toArray()));
    }
}