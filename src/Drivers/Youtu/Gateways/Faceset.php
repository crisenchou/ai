<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Youtu\Gateways;


class Faceset extends AbstractYoutuGateway
{


    public function resourcePath(): array
    {
        return ['api'];
    }


    /**
     * 增加人脸
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function add(array $options = [])
    {
        return $this->send('addface', $options);
    }


    /**
     * 删除人脸
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function delete(array $options = [])
    {
        return $this->send('delface', $options);
    }


    /**
     * 获取人脸信息
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function get(array $options = [])
    {
        return $this->send('getfaceinfo', $options);
    }


}