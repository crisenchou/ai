<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Tencent\Gateways;


class Ocr extends AbstractYoutuGateway
{

    public function resourcePath(): array
    {
        return ['ocr'];
    }

    /**
     * 文字识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function general(array $options = [])
    {
        return $this->send('ocr_generalocr', $options);
    }


    /**
     * 手写文字识别 中文 英文
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function handwriting(array $options = [])
    {
        return $this->send('ocr_handwritingocr', $options);
    }

    /**
     * 身份证识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function idcard(array $options = [])
    {
        return $this->send('ocr_idcardocr', $options);
    }

    /**
     * 名片识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function bc(array $options = [])
    {
        return $this->send('ocr_bcocr', $options);
    }


    /**
     * 营业执照识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function bizlicense(array $options = [])
    {
        return $this->send('ocr_bizlicenseocr', $options);
    }


    /**
     * 银行卡识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function creditcard(array $options = [])
    {
        return $this->send('ocr_creditcardocr', $options);
    }


    /**
     * 车牌识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function plate(array $options = [])
    {
        return $this->send('ocr_plateocr', $options);
    }


    /**
     * 行驶证 驾驶证识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function driverlicense(array $options = [])
    {
        return $this->send('ocr_driverlicenseocr', $options);
    }

    /**
     * @param array $options
     * @return \Crisen\AI\Drivers\Tencent\TencentResponse
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function worddetect(array $options)
    {
        return $this->send('worddetect', $options);
    }


}