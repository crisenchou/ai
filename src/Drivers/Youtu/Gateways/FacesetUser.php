<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Youtu\Gateways;


class FacesetUser extends AbstractYoutuGateway
{


    public function resourcePath(): array
    {
        return ['api'];
    }


    /**
     * 个体创建
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function add(array $options = [])
    {
        return $this->send('newperson', $options);
    }


    /**
     * 获取个体信息
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function get(array $options = [])
    {
        return $this->send('getinfo', $options);
    }


    /**
     * 设置个体信息
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function update(array $options = [])
    {
        return $this->send('setinfo', $options);
    }


    /**
     * 个体删除
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function delete(array $options = [])
    {
        return $this->send('delperson', $options);
    }


    /**
     * 获取个体人脸列表
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function getFaces(array $options = [])
    {
        return $this->send('getfaceids', $options);
    }

}