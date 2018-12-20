<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Tencent\Gateways;


class FacesetUser extends AbstractYoutuGateway
{


    public function resourcePath(): array
    {
        return ['face'];
    }


    /**
     * 个体创建
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function add(array $options = [])
    {
        return $this->send('face_newperson', $options);
    }


    /**
     * 获取个体信息
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function get(array $options = [])
    {
        return $this->send('face_getinfo', $options);
    }


    /**
     * 设置个体信息
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function update(array $options = [])
    {
        return $this->send('face_setinfo', $options);
    }


    /**
     * 个体删除
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function delete(array $options = [])
    {
        return $this->send('face_delperson', $options);
    }


    /**
     * 获取人脸列表
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function getFaces(array $options = [])
    {
        return $this->send('face_getfaceids', $options);
    }

}