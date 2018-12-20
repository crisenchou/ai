<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-20
 * description:
 */

namespace Crisen\AI\Drivers\Tencent\Gateways;


class Vision extends AbstractYoutuGateway
{

    public function resourcePath(): array
    {
        return ['vision'];
    }


    /**
     * 滤镜
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function imgFilter($options = [])
    {
        return $this->send('vision_imgfilter', $options);
    }

    /**
     * 看图说话
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function imgToText($options = [])
    {
        return $this->send('vision_imgtotext', $options);
    }


    /**
     * 场景识别
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function scener($options = [])
    {
        return $this->send('vision_scener', $options);
    }

    /**
     * 物体识别
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function object($options = [])
    {
        return $this->send('vision_objectr', $options);
    }

}