<?php

/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description: 人脸识别库
 */

namespace Crisen\AI\Drivers\Baidu\Gateways;


use Crisen\AI\Exceptions\Exception;

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


    public function groupList($group)
    {
        $groupList = $group;
        if (is_array($group)) {
            $groupList = implode(',', $group);
        }
        $this->params['group_id_list'] = $groupList;
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
     * 1:n 搜索
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function search($options = [])
    {
        return $this->send('search', $options);
    }


    /**
     * m:n 搜索
     * @param $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function multiSearch($options = [])
    {
        return $this->send('multi-search', $options);
    }


    /**
     * @param array $options
     * @param string $opertion
     * @return mixed
     * @throws Exception
     */
    public function verify($options = [], $op = 'person')
    {
        if (method_exists($this, $op . 'Verify')) {
            return call_user_func([$this, $op . 'Verify'], $options);
        } else {
            throw new Exception("method [$op . 'Verify'] not exist");
        }
    }

    /**
     * 身份验证
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function personVerify($options = [])
    {
        return $this->send('person/verify', $options);
    }


    /**
     * 在线活体检测
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function faceVerify($options = [])
    {
        return $this->send('faceverify', $options);
    }
}
