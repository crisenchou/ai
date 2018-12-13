<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-6
 * description:
 */

namespace Crisen\AI\Drivers\Baidu\Gateways;


class FacesetGroup extends AbstractBaiduGateway
{

    protected $image;
    protected $imageType;

    /**
     * @return array
     */
    public function resourcePath(): array
    {
        return [
            'rest', '2.0', 'face', 'v3', 'faceset', 'group'
        ];
    }

    /**
     * 用户组管理
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function add($options = [])
    {
        return $this->send('add', $options);
    }

    /**
     * 用户组删除
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function delete($options = [])
    {
        return $this->send('delete', $options);
    }


    /**
     * 用户组列表
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function get($options = [])
    {
        return $this->send('getlist', $options);
    }


    /**
     * 获取用户列表
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function users($options = [])
    {
        return $this->send('getusers', $options);
    }

}