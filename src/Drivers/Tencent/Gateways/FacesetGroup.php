<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Tencent\Gateways;


class FacesetGroup extends AbstractTencentGateway
{

    public function resourcePath(): array
    {
        return ['face'];
    }


    /**
     * 组列表查询
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function get(array $options = [])
    {
        return $this->send('face_getgroupids', $options);

    }

    /**
     * 获取个体列表
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function users(array $options = [])
    {
        return $this->send('face_getpersonids', $options);
    }


}