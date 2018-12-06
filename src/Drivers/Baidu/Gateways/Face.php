<?php

/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description: 人脸识别库
 */

namespace Crisen\AI\Drivers\Baidu\Gateways;


use mysql_xdevapi\Exception;

class Face extends AbstractBaiduGateway
{


    protected $image;
    protected $imageType;

    /**
     * @return array
     */
    public function resourcePath(): array
    {
        return [
            'rest', '2.0', 'face', 'v3'
        ];
    }


    public function send($action, $options = [])
    {
        $data = [];
        $data['image'] = $this->image;
        $data['image_type'] = $this->imageType;
        $data = array_merge($data, $options);
        $response = $this->client->post($this->buildUrl($action), $data);
        if (!is_array($response)) {
            throw new Exception('接口请求错误');
        }
        return json_decode($response['content'], true);
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
     * 人脸检测
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function detect($options = [])
    {
        return $this->send('detect', $options);
    }

    /**
     * 人脸对比
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function match($options = [])
    {
        return $this->send('match', $options);
    }


    /**
     * @param array $options
     * @return array
     */
    public function search($options = [])
    {
        return $this->send('search', $options);
    }
}
