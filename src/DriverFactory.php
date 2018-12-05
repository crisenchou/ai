<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */


namespace Crisen\AI;


class DriverFactory
{
    public static function make($name, $config)
    {
        $driver = __NAMESPACE__ . '\\Drivers\\' . ucfirst($name) . '\\' . ucfirst($name);
        return new $driver($config);
    }

}