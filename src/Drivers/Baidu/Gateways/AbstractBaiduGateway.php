<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-5
 * description:
 */

namespace Crisen\AI\Drivers\Baidu\Gateways;


use Crisen\AI\Drivers\Baidu\Baidu;
use Crisen\AI\Drivers\Baidu\BaiduResponse;
use Crisen\AI\Exceptions\Exception;


abstract class AbstractBaiduGateway
{

    protected $driver;
    protected $accessToken;
    protected $client;
    protected $params = [];
    protected $headers = [];


    protected $baseUrl = "https://aip.baidubce.com";


    public function __construct(Baidu $driver)
    {
        $this->client = $driver->client;
        $this->client->setHeaders($this->headers());
        $this->accessToken = $driver->accessToken;
    }


    /**
     * @return array
     */
    public function headers()
    {
        return [
            'Content-Type' => 'application/json'
        ];
    }


    /**
     * @param $path
     * @return $this
     */
    public function path($path)
    {
        $image = base64_encode(file_get_contents($path));
        return $this->base64($image);
    }


    /**
     * @param string $image
     * @return $this
     */
    public function url(string $image)
    {
        return $this->image($image, 'URL');
    }

    /**
     * @param string $image
     * @return $this
     */
    public function base64(string $image)
    {
        return $this->image($image, 'BASE64');
    }


    /**
     * @param string $image
     * @return $this
     */
    public function faceToken(string $image)
    {
        return $this->image($image, 'FACE_TOKEN');
    }


    /**
     * @param $action
     * @param array $options
     * @return mixed
     * @throws Exception
     */
    public function send($action, $options = [])
    {
        $data = array_merge($this->params, $options);
        $response = $this->client->post($this->buildUrl($action), json_encode($data));
        return $this->response($response);
    }


    /**
     * @param array $res
     * @return mixed
     * @throws Exception
     */
    public function response($res = [])
    {
        if (!is_array($res)) {
            throw new Exception('接口请求错误');
        }
        return new BaiduResponse(json_decode($res['content'], true));
    }


    /**
     * @param string $image
     * @param string $imageType
     * @return $this
     */
    public function image(string $image, string $imageType = 'BASE64')
    {
        $this->params['image'] = $image;
        $this->params['image_type'] = $imageType;
        return $this;
    }

    /**
     * @param $group
     * @return $this
     */
    public function group($group)
    {
        $this->params['group_id'] = $group;
        return $this;
    }


    /**
     * @param string $user
     * @return $this
     */
    public function user(string $user)
    {
        $this->params['user_id'] = $user;
        return $this;
    }

    /**
     * 所有的路由都需要指定资源路径
     * @return array
     */
    abstract public function resourcePath(): array;


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
        return implode('/', $uri) . '?' . http_build_query(['access_token' => $this->accessToken]);
    }


    /**
     * @param $action
     * @param $arguments
     * @return mixed
     * @throws Exception
     */
    public function __call($action, $arguments)
    {
        return $this->send($action, ...$arguments);
    }
}

