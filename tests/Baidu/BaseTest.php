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

    public $config = [
        'app_id' => '15080677',
        'api_key' => 'DAUSqdCmoayLIRm9bKKAtb4v',
        'secret_key' => 'jiMPUuBSkvgGWHWupu3pxsENIOgx47bx'
    ];


    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->driver = (new AI($this->config))->driver('baidu');
    }

    public function assertSuccess($response)
    {
        $this->assertArrayHasKey('code', $response);
    }
}