<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */

namespace Crisen\AI;


use Crisen\AI\Exceptions\Exception;


class AI
{

    public $config;
    public $driver;


    /**
     * AI constructor.
     * @param array $config
     */
    public function __construct(array $config = [])
    {
        $this->config = $config;
    }


    /**
     * @param $name
     * @param array $config
     * @return mixed
     * @throws Exception
     */
    public function driver($name, $config = [])
    {

        if (!$config) {
            $config = $this->config;
        }
        $this->driver = DriverFactory::make($name, $config);
        return $this->driver;
    }


    /**
     * @param $method
     * @param $arguments
     * @return mixed
     * @throws Exception
     */
    public static function __callStatic($method, $arguments)
    {
        $app = new self(...$arguments);
        return $app->driver($method);
    }


}