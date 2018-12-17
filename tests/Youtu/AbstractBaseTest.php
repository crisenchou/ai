<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Tests\Youtu;


use Crisen\AI\AI;
use Crisen\AI\Tests\TestCase;

abstract class AbstractBaseTest extends TestCase
{


    protected $driver;

    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $default = require dirname(__DIR__) . '/config/config.php';
        $env = require dirname(__DIR__) . '/config/env.php';
        $config = $default['youtu'];
        if (is_array($env)) {
            $config = array_merge($default['youtu'], $env['youtu']);
        }
        $this->driver = AI::youtu($config);
    }


    public function assertSuccess()
    {
        $this->assertTrue(1);
    }
}