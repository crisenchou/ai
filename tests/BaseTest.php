<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-5
 * description:
 */


namespace Crisen\AI\Tests;

class BaseTest extends TestCase
{
    public $config = [
        'app_id' => '15051836',
        'api_key' => 'wRdtkGRHrBmeamI6gjmbbVMj',
        'secret_key' => 'ZeWb0V8z4tHGeWA36p7mNOjgMoXcMrEl'
    ];


    public function assertSuccess($response)
    {
        $this->assertArrayHasKey('code', $response);
    }
}