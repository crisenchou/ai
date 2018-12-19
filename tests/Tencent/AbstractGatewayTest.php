<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-7
 * description:
 */


namespace Crisen\AI\Tests\Tencent;


abstract class AbstractGatewayTest extends AbstractBaseTest
{
    protected $gateway;


    public function __construct(string $name = null, array $data = [], string $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->gateway = $this->driver->gateway($this->gateway());
    }


    abstract protected function gateway();
}