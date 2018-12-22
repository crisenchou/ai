<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-20
 * description:
 */

namespace Crisen\AI\Drivers\Tencent\Gateways;


class Aai extends AbstractTencentGateway
{
    public function resourcePath(): array
    {
        return ['aai'];
    }


    /**
     * 语音合成
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function tts(array $options = [])
    {
        return $this->send('aai_tts', $options);
    }

    /**
     * 关键词检索
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function detectkeyword(array $options = [])
    {
        return $this->send('aai_detectkeyword', $options);
    }


    /**
     * 长语音识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function wxasrlong(array $options = [])
    {
        return $this->send('aai_wxasrlong', $options);
    }


    /**
     * 语音识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function asr(array $options = [])
    {
        return $this->send('aai_asr', $options);
    }


}