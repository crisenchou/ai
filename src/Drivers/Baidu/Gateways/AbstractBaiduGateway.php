<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-5
 * description:
 */

namespace Crisen\AI\Drivers\Baidu\Gateways;


use Crisen\AI\Drivers\Baidu\Baidu;


abstract class AbstractBaiduGateway
{

    protected $driver;
    public $accessToken;
    public $client;

    protected $baseUrl = "https://aip.baidubce.com";


    public function __construct(Baidu $driver)
    {
        $this->client = $driver->client;
        $this->accessToken = $driver->accessToken;
    }


    /**
     * @param $action
     * @return string
     */
    protected function buildUrl($action): string
    {
        $params = [];
        array_push($params, $this->baseUrl);
        array_push($params, $this->resourcePath());
        array_push($params, $action);
        return implode('/', $params) . '?' . http_build_query(['access_token' => $this->accessToken]);
    }


    /**
     * 所有的路由都需要指定资源路径
     * @return array
     */
    abstract public function resourcePath(): array;


    abstract public function send($action, $data = []);
//
//    public function send($action, array $data = [])
//    {
//        return $this->client->post($this->buildUrl($action), $data);
//    }


    public function __call($action, $arguments)
    {
        return $this->send($action, ...$arguments);
    }
}

