<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */

namespace Crisen\AI\Drivers\Baidu;


use Crisen\AI\Client;
use Crisen\AI\Contracts\DriverInterface;
use Crisen\AI\Exceptions\Exception;

class Baidu implements DriverInterface
{

    public $gateway;
    protected $appId;
    protected $apiKey;
    protected $secretKey;
    public $accessToken;
    public $client;


    /**
     * Baidu constructor.
     * @param array $config
     * @throws Exception
     */
    public function __construct(array $config)
    {
        $this->client = new Client();
        $this->appId = $config['app_id'];
        $this->apiKey = $config['api_key'];
        $this->secretKey = $config['secret_key'];
        $this->getAccessToken();
    }


    /**
     * @return string
     */
    public function accessTokenUrl()
    {
        return 'https://aip.baidubce.com/oauth/2.0/token';
    }

    /**
     * init access token
     * @return mixed
     * @throws Exception
     */
    public function getAccessToken()
    {
        $param = [
            'grant_type' => 'client_credentials',
            'client_id' => $this->apiKey,
            'client_secret' => $this->secretKey
        ];
        $result = $this->client->post($this->accessTokenUrl(), $param);

        if (!is_array($result)) {
            throw new Exception('请求access token失败');
        }

        $content = json_decode($result['content'], true);
        $this->accessToken = $content['access_token'];
    }


    /**
     * @param string $name
     * @param string $version
     * @return mixed
     * @throws Exception
     */
    public function gateway($name = "", $version = 'v1')
    {
        $gateway = __NAMESPACE__ . '\\Gateways\\' . ucfirst($name);
        if (class_exists($gateway)) {
            return self::make($gateway, $name, $version);
        }
        throw new Exception("gateway [{$name}] not exist");
    }


    public function make($gateway, $name, $version = '')
    {
        $this->gateway = new $gateway($name, $version, $this);
        return $this->gateway;
    }

    public function __call($name, $arguments)
    {
        $this->gateway->$name(...$arguments);
    }
}