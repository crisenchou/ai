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
    public function __construct(array $config)
    {
        $this->config = $config;
    }


    /**
     * @param $name
     * @return mixed
     */
    public function driver($name)
    {
        $this->driver = DriverFactory::make($name, $this->config);
        return $this->driver;
    }


    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws Exception
     */
    public function __call($name, $arguments)
    {

        if (!$this->driver) {
            throw new Exception('driver not exist');
        }

        return $this->driver->$name(...$arguments);
    }


}