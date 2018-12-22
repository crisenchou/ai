<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Tencent\Gateways;


class Image extends AbstractTencentGateway
{

    public function resourcePath(): array
    {
        return ['image'];
    }


    /**
     * 模糊图片识别
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function fuzzy(array $options = [])
    {
        return $this->send('image_fuzzy', $options);
    }


    /**
     * 食物识别
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function food(array $options = [])
    {
        return $this->send('image_food', $options);
    }

    /**
     * 图片标签识别
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function tag(array $options = [])
    {
        return $this->send('image_tag', $options);
    }


    /**
     * 暴恐图片识别
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function terrorism(array $options = [])
    {
        return $this->send('image_terrorism', $options);
    }

}