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
     * 人脸注册
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function add($options = [])
    {
        return $this->send('faceset/user/add', $options);
    }


    /**
     * 人脸更新
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function update($options = [])
    {
        return $this->send('faceset/user/update', $options);
    }


    /**
     * 人脸删除
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function delete($options = [])
    {
        return $this->send('faceset/face/delete', $options);
    }


    /**
     * 用户信息查询
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function user($options = [])
    {
        return $this->send('faceset/user/get', $options);
    }


    /**
     * 获取用户人脸列表
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function getList($options = [])
    {
        return $this->send('faceset/face/getlist', $options);
    }


    /**
     * 获取用户列表
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function getUserList($options = [])
    {
        return $this->send('faceset/face/getusers', $options);
    }


    /**
     * 复制用户
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function copyUser($options = [])
    {
        return $this->send('faceset/user/copy', $options);
    }


    /**
     * 删除用户
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function deleteUser($options = [])
    {
        return $this->send('faceset/user/delete', $options);
    }

    /**
     * 用户组管理
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function groupAdd($options = [])
    {
        return $this->send('faceset/group/add', $options);
    }

    /**
     * 用户组删除
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function groupDelete($options = [])
    {
        return $this->send('faceset/group/delete', $options);
    }


    /**
     * 用户组列表
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function groupList($options = [])
    {
        return $this->send('faceset/group/getlist', $options);
    }

}
