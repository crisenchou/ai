<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */


namespace Crisen\AI\Drivers\Baidu\Gateways;


class Nlp extends AbstractBaiduGateway
{
    protected $coding = 'GBK';

    public function resourcePath(): array
    {

        return [
            'rpc', '2.0', 'nlp','v1'
        ];
    }

    /**
     *
     * 设置编码
     * 
     * @return $this
     */
    public function charset($coding)
    {   
        $coding = strtoupper($coding);
        $rules  = ['UTF-8', 'GBK'];

        $this->coding = in_array($coding, $rules) ? $coding : 'GBK';

        return $this;
    }

    /**
     * @param $action
     * @return string
     */
    protected function buildUrl($action): string
    {
        $url = parent::buildUrl($action);

        if ($this->coding == 'UTF-8') {
            $url .= '&charset=' . $this->coding;
        }

        return $url;
    }

    /**
     * 文章标签接口
     *
     * @param string $title - 篇章的标题，最大80字节
     * @param string $content - 篇章的正文，最大65535字节
     * @param array $options - 可选参数对象，key: value都为string类型
     * @description options列表:
     * @return array
     */
    public function keyword($title, $content, $options = [])
    {
        $data = array_merge([
            'title'   => $title, 
            'content' => $content
        ], $options);

        return $this->send('keyword', $data);
    }

}