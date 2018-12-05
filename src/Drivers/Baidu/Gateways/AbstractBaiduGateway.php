<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-5
 * description:
 */

namespace Crisen\AI\Drivers\Baidu\Gateways;


use Crisen\AI\Client;
use Crisen\AI\Contracts\DriverInterface;
use Crisen\AI\Drivers\Baidu\Baidu;


abstract class AbstractBaiduGateway
{

    protected $driver;
    public $accessToken;
    public $client;

    protected $baseUrl = "https://aip.baidubce.com";
    protected $uri = 'rest';// options  rest | rpc
    protected $uriVersion = '2.0';
    protected $gateway;
    protected $gatewayVersion;
    protected $action;

    protected $image;
    protected $imageType;


    public function __construct($name, $version, Baidu $driver)
    {
        $this->gateway = $name;
        $this->version = $version;
        $this->client = $driver->client;
        $this->accessToken = $driver->accessToken;
    }


    public function uri($name, $version = '')
    {
        $this->uri = $name;
        $version && $this->uriVersion = $version;
    }


    /**
     * @param $path
     * @return AbstractBaiduGateway
     */
    public function path($path)
    {
        $image = base64_encode(file_get_contents($path));
        return $this->base64($image);
    }


    /**
     * @param string $image
     * @return AbstractBaiduGateway
     */
    public function url(string $image)
    {
        return $this->image($image, 'URL');
    }

    /**
     * @param string $image
     * @return AbstractBaiduGateway
     */
    public function base64(string $image)
    {
        return $this->image($image, 'BASE64');
    }


    /**
     * @param string $image
     * @return AbstractBaiduGateway
     */
    public function faceToken(string $image)
    {
        return $this->image($image, 'FACE_TOKEN');
    }


    /**
     * @param string $image
     * @param string $imageType
     * @return $this
     */
    public function image(string $image, string $imageType = 'BASE64')
    {
        $this->image = $image;
        $this->imageType = $imageType;
        return $this;
    }


    /**
     * @param $action
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function send($action, array $options = [])
    {
        $data = array();
        $data['image'] = $this->image;
        $data['image_type'] = $this->imageType;
        $data = array_merge($data, $options);

        $params = [
            $this->baseUrl,
            $this->uri,
            $this->uriVersion,
            $this->gateway,
            $this->version,
            $action
        ];

        $url = implode('/', $params) . '?' . http_build_query(['access_token' => $this->accessToken]);
        var_dump($url);
        return $this->client->post($url, $data);
    }


    public function __call($action, $arguments)
    {
        return $this->send($action, ...$arguments);
    }
}

