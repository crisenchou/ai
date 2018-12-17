<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Youtu\Gateways;


use Crisen\AI\Contracts\ShouldSign;

class Image extends AbstractYoutuGateway implements ShouldSign
{

    public function resourcePath(): array
    {
        return ['imageapi'];
    }


    // 模糊图片识别
    public function fuzzy(array $options = [])
    {
        return $this->send('fuzzydetect', $options);
    }


    //食物识别
    public function food(array $options = [])
    {
        return $this->send('fooddetect', $options);
    }

    //图片标签识别
    public function tag(array $options = [])
    {
        return $this->send('imagetag', $options);
    }


    //  色情图像识别
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