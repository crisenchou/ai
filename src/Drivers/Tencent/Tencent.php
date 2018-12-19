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
    protected $secretId;
    protected $secretKey;
    protected $expired = 2592000;
    protected $userId;

    /**
     * Youtu constructor.
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->appId = $config['app_id'];
        $this->secretId = $config['secret_id'];
        $this->secretKey = $config['secret_key'];
        $this->userId = $config['qq'];
    }


    public function getAppId()
    {
        return $this->appId;
    }

    public function sign()
    {

        $now = time();
        $rdm = rand();
        $data = [
            'a' => $this->appId,
            'k' => $this->secretId,
            'e' => $this->expired,
            't' => $now,
            'r' => $rdm,
            'u' => $this->userId,
        ];
        $plainText = http_build_url($data);
        $bin = hash_hmac("SHA1", $plainText, $this->secretKey, true);
        $bin = $bin . $plainText;
        $sign = base64_encode($bin);
        return $sign;
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