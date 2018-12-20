<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-15
 * description:
 */

namespace Crisen\AI\Drivers\Tencent;


use Crisen\AI\Contracts\DriverInterface;
use Crisen\AI\Exceptions\Exception;


class Tencent implements DriverInterface
{

    protected $gateway;
    protected $appId;
    protected $appKey;

    /**
     * Youtu constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->appId = $config['app_id'];
        $this->appKey = $config['app_key'];
    }


    public function getAppId()
    {
        return $this->appId;
    }


    public function sign($params)
    {
        ksort($params);
        $str = '';
        foreach ($params as $key => $value) {
            if ($value !== '') {
                $str .= $key . '=' . urlencode($value) . '&';
            }
        }
        $str .= 'app_key=' . $this->appKey;
        $sign = strtoupper(md5($str));
        return $sign;
    }


    public function genNonceStr($length = 22)
    {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = "";
        for ($i = 0; $i < $length; $i++) {
            $str .= substr($chars, mt_rand(0, strlen($chars) - 1), 1);
        }
        return $str;
    }

    /**
     * @param $name
     * @return string
     */
    public function getName($name)
    {
        $gateway = '';
        if (strpos($name, '.')) {
            $names = explode('.', $name);
            foreach ($names as $name) {
                $gateway .= ucfirst($name);
            }
        } else {
            $gateway = ucfirst($name);
        }
        return $gateway;
    }


    /**
     * @param string $name
     * @return mixed
     * @throws Exception
     */
    public function gateway($name = "")
    {
        $gateway = __NAMESPACE__ . '\\Gateways\\' . $this->getName($name);
        if (class_exists($gateway)) {
            return self::make($gateway);
        }
        throw new Exception("gateway [{$name}] not exist");
    }


    /**
     * @param $gateway
     * @return mixed
     * @throws Exception
     */
    public function make($gateway)
    {
        $this->gateway = new $gateway($this);
        return $this->gateway;
    }


    /**
     * @param $name
     * @param $arguments
     * @return mixed
     * @throws Exception
     */
    public function __call($name, $arguments)
    {
        $name = $this->getName($name);
        return $this->gateway($name);
    }
}