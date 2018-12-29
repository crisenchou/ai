<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-20
 * description:
 */

namespace Crisen\AI\Drivers\Tencent\Gateways;


class Ptu extends AbstractTencentGateway
{
    public function resourcePath(): array
    {
        return ['ptu'];
    }


    /**
     * 滤镜
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function imgFilter($options = [])
    {
        return $this->send('ptu_imgfilter', $options);
    }

    /**
     * 人脸美妆
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function faceCosmetic($options = [])
    {
        return $this->send('ptu_facecosmetic', $options);
    }


    /**
     * 人脸变妆
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function faceDecoration($options = [])
    {
        return $this->send('ptu_facedecoration', $options);
    }

    /**
     * 大头贴
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function faceSticker($options = [])
    {
        return $this->send('ptu_facesticker', $options);
    }

    /**
     * 颜龄检测
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function faceAge($options = [])
    {
        return $this->send('ptu_faceage', $options);
    }

}