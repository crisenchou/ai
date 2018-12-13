<?php

/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description: 人脸识别库
 */

namespace Crisen\AI\Drivers\Baidu\Gateways;


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
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function search($options = [])
    {
        return $this->send('search', $options);
    }


    /**
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
