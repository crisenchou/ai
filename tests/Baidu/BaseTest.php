<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-5
 * description:
 */


namespace Crisen\AI\Tests\Baidu;

use Crisen\AI\AI;
use Crisen\AI\Tests\TestCase;

abstract class BaseTest extends TestCase
{


    protected $driver;
    
    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $default = require dirname(__DIR__) . '/config/config.php';
        $env = require dirname(__DIR__) . '/config/env.php';
        $config = $default['baidu'];
        if (is_array($env)) {
            $config = array_merge($default['baidu'], $env['baidu']);
        }
        $this->driver = (new AI($config))->driver('baidu');
    }

    public function assertSuccess($response)
    {
        $this->assertArrayHasKey('code', $response);
    }
}