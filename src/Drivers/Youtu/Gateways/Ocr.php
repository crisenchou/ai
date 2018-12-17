<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Youtu\Gateways;


use Crisen\AI\Contracts\ShouldSign;

class Ocr extends AbstractYoutuGateway implements ShouldSign
{

    public function resourcePath(): array
    {
        return ['ocrapi'];
    }

    /**
     * 文字识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function general(array $options = [])
    {
        return $this->send('generalocr', $options);
    }


    /**
     * 手写文字识别 中文 英文
     * @param array $options
     * @param int $english
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function handwriting(array $options = [], $english = 0)
    {
        $action = 'handwritingocr';

        if ($english) {
            $action = 'ehocr';
        }
        return $this->send($action, $options);
    }


    /**
     * 英文手写文字识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function eh(array $options = [])
    {
        return $this->handwriting($options, $english = 1);
    }

    /**
     * 身份证识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function idcard(array $options = [])
    {
        return $this->send('idcardocr', $options);
    }

    /**
     * 文字识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function bc(array $options = [])
    {
        return $this->send('bcocr', $options);
    }


    /**
     * 营业执照识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function bizlicense(array $options = [])
    {
        return $this->send('bizlicenseocr', $options);
    }


    /**
     * 银行卡识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function creditcard(array $options = [])
    {
        return $this->send('creditcardocr', $options);
    }


    /**
     * 车牌识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function plate(array $options = [])
    {
        return $this->send('plateocr', $options);
    }


    /**
     * 行驶证 驾驶证识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function driverlicense(array $options = [])
    {
        return $this->send('driverlicenseocr', $options);
    }

    // 其实上面的函数都可以使用语法糖来实现 但是为了方便理解 还是写了一点

    //增值税发票识别 invoice

    //车辆vin识别  vin

    // 护照识别  passport


    public function worddetect(array $options)
    {
        return $this->send('worddetect', $options);
    }

    //速算题目识别 arithmetic

    //购车发票识别  structure

    //金融票据识别 finan

    //电子运单识别  waybill


}