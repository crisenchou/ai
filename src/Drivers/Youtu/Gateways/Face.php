<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Youtu\Gateways;


class Face extends AbstractYoutuGateway
{


    /**
     * @return array
     */
    protected function resourcePath(): array
    {
        return ['api'];
    }


    /**
     * 需要签名的域
     * @return array
     */
    protected function scope()
    {
        return ['multifaceidentify'];
    }

    /**
     * 人脸检测
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function detect(array $options = [])
    {
        return $this->send('detectface', $options);
    }


    /**
     * 人脸关键点定位
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function shape(array $options = [])
    {
        return $this->send('faceshape', $options);
    }


    /**
     * 人脸对比
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function compare(array $options = [])
    {
        return $this->send('facecompare', $options);
    }


    /**
     * 人脸验证
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function verify(array $options = [])
    {
        return $this->send('faceverify', $options);
    }


    /**
     * 人脸检索
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function search(array $options)
    {
        return $this->send('multifaceidentify', $options);
    }


}