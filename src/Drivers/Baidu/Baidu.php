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
    protected $gateway;
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
        $this->getAccessToken();
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