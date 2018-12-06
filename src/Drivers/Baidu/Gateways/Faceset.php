<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-6
 * description:
 */


namespace Crisen\AI\Drivers\Baidu\Gateways;


class Faceset extends AbstractBaiduGateway
{

    protected $image;
    protected $imageType;

    /**
     * @return array
     */
    public function resourcePath(): array
    {
        return [
            'rest', '2.0', 'face', 'v3', 'faceset', 'face'
        ];
    }


    public function send($action, $options = [])
    {
        $data = [];
        $data['image'] = $this->image;
        $data['image_type'] = $this->imageType;
        $data = array_merge($data, $options);
        return $this->client->post($this->buildUrl($action), $data);
    }


    /**
     * 获取用户人脸列表
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function getList($options = [])
    {
        return $this->send('getlist', $options);
    }

    /**
     * 人脸删除
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function delete($options = [])
    {
        return $this->send('delete', $options);
    }

    /**
     * 获取用户列表
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function getUsers($options = [])
    {
        return $this->send('getusers', $options);
    }

}