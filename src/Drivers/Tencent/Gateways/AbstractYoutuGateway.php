<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Tencent\Gateways;


use Crisen\AI\Client;
use Crisen\AI\Contracts\ShouldSign;
use Crisen\AI\Drivers\Tencent\Tencent;
use Crisen\AI\Drivers\Tencent\TencentResponse;
use Crisen\AI\Exceptions\Exception;

abstract class AbstractYoutuGateway
{

    protected $client;
    protected $baseUrl = 'https://api.ai.qq.com/fcgi-bin';
    protected $driver;
    protected $params = [];


    public function __construct(Tencent $driver)
    {
        $this->client = new Client();
        $this->driver = $driver;
        $this->params['app_id'] = $driver->getAppId();
    }

    /**
     * 所有的路由都需要指定资源路径
     * @return array
     */
    abstract protected function resourcePath(): array;

    /**
     * @param $code
     * @return $this
     */
    public function base64($code)
    {
        $this->params['image'] = $code;
        return $this;
    }

    /**
     * @param $url
     * @return $this
     */
    public function url($url)
    {
        $this->params['url'] = $url;
        return $this;
    }

    /**
     * @param $path
     * @return $this
     */
    public function path($path)
    {
        $content = file_get_contents($path);
        $this->params['image'] = base64_encode($content);
        return $this;
    }


    /**
     * @param $action
     * @return string
     */
    protected function buildUrl($action): string
    {
        $uri = [];
        array_push($uri, $this->baseUrl);
        $uri = array_merge($uri, $this->resourcePath());
        array_push($uri, $action);
        return implode('/', $uri);
    }


    /**
     * @param array $res
     * @return TencentResponse
     */
    public function response($res = [])
    {
        return new TencentResponse(json_decode($res['content'], true));
    }

    /**
     * @param $action
     * @param array $options
     * @return TencentResponse
     * @throws Exception
     */
    public function send($action, $options = [])
    {
        $data = array_merge($this->params, $options);
        $client = $this->client;
        if ($this instanceof ShouldSign) {
            if ($this->inScope($action)) {
                $this->client->setHeaders($this->headers());
            }
        }


        $url = $this->buildUrl($action);

        //var_dump($url);exit;

        $response = $client->post($this->buildUrl($action), $data);

        var_dump($response);exit;

        return $this->response($response);
    }


    /**
     * @param $action
     * @return bool
     */
    private function inScope($action)
    {
        $scope = $this->scope();
        if (!$scope) {
            return true;
        }
        return in_array($action, $scope);
    }

    /**
     * scope of sign
     * @return array
     */
    public function scope()
    {
        return [];
    }


    /**
     * @return array
     */
    protected function headers()
    {
        return [
            'Host' => $this->host,
            'Content-Type' => 'text/json',
            'Authorization' => $this->driver->sign(),
        ];
    }


    /**
     * @param $action
     * @param $arguments
     * @return TencentResponse
     * @throws Exception
     */
    public function __call($action, $arguments)
    {
        if ($this instanceof Ocr) {
            if (!strpos($action, 'ocr')) {
                $action = $action . 'ocr';
            }
        }
        return $this->send($action, ...$arguments);
    }

}