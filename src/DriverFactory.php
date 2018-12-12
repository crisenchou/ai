<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */


namespace Crisen\AI;


use Crisen\AI\Exceptions\Exception;

class DriverFactory
{

    /**
     * @param $name
     * @param $config
     * @return mixed
     * @throws Exception
     */
    public static function make($name, $config)
    {
        $driver = __NAMESPACE__ . '\\Drivers\\' . ucfirst($name) . '\\' . ucfirst($name);

        if (class_exists($driver)) {
            return new $driver($config);
        }

        throw new Exception("driver [{$name}] not exist");

    }

}