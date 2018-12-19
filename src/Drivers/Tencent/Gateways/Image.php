<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Tencent\Gateways;


use Crisen\AI\Contracts\ShouldSign;

class Image extends AbstractYoutuGateway implements ShouldSign
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
        return $this->send('fuzzydetect', $options);
    }


    /**
     * 食物识别
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function food(array $options = [])
    {
        return $this->send('fooddetect', $options);
    }

    /**
     * 图片标签识别
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function tag(array $options = [])
    {
        return $this->send('imagetag', $options);
    }


    /**
     * 色情图像识别
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function porn(array $options = [])
    {
        return $this->send('imageporn', $options);
    }


    // 暴恐图片识别
    public function terrorism(array $options = [])
    {
        return $this->send('imageterrorism', $options);
    }

}