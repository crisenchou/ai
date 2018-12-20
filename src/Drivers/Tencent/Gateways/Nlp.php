<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-20
 * description:
 */

namespace Crisen\AI\Drivers\Tencent\Gateways;


class Nlp extends AbstractYoutuGateway
{
    public function resourcePath(): array
    {
        return ['nlp'];
    }


    /**
     * 分词
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function wordSeg(array $options = [])
    {
        return $this->send('nlp_wordseg', $options);
    }

    /**
     * 词性
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function wordPos(array $options = [])
    {
        return $this->send('nlp_wordpos', $options);
    }


    /**
     * 专有名词
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function wordNer(array $options = [])
    {
        return $this->send('nlp_wordner', $options);
    }


    /**
     * 专有名词
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function wordSyn(array $options = [])
    {
        return $this->send('nlp_wordsyn', $options);
    }

    /**
     * 意图成分
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function wordCom(array $options = [])
    {
        return $this->send('nlp_wordcom', $options);
    }

    /**
     * 情感分析
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function textPolar(array $options = [])
    {
        return $this->send('nlp_textpolar', $options);
    }


    /**
     * 智能闲聊
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function textChat(array $options = [])
    {
        return $this->send('nlp_textchat', $options);
    }

    /**
     * 文本翻译
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function textTrans(array $options = [])
    {
        return $this->send('nlp_texttrans', $options);
    }

    /**
     * 语音翻译
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function speechTranslate(array $options = [])
    {
        return $this->send('nlp_speechtranslate', $options);
    }


    /**
     * 图片翻译
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function imageTranslate(array $options = [])
    {
        return $this->send('nlp_imagetranslate', $options);
    }

    /**
     * 语种识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function textDetect(array $options = [])
    {
        return $this->send('nlp_textdetect', $options);
    }


}