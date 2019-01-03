<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-6
 * description:
 */


namespace Crisen\AI\Drivers\Baidu\Gateways;


class FacesetUser extends AbstractBaiduGateway
{

    protected $image;
    protected $imageType;

    /**
     * @return array
     */
    public function resourcePath(): array
    {
        return [
            'rest', '2.0', 'face', 'v3', 'faceset', 'user'
        ];
    }


    /**
     * @param string $group
     * @return AbstractBaiduGateway
     */
    public function group($group = '')
    {
        if (!$group) {
            $group = '@ALL';
        }
        return parent::group($group);
    }


    /**
     * 人脸注册
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function add($options = [])
    {
        return $this->send('add', $options);
    }


    /**
     * 人脸更新
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function update($options = [])
    {
        return $this->send('update', $options);
    }


    /**
     * @param string $src
     * @param string $dest
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function copy(string $src, string $dest)
    {
        $this->params['src_group_id'] = $src;
        $this->params['dst_group_id'] = $dest;
        return $this->send('copy');
    }


    /**
     * 删除用户
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function delete($options = [])
    {
        return $this->send('delete', $options);
    }


    /**
     * 用户信息查询
     * @param array $options
     * @return array
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function get($options = [])
    {
        return $this->send('get', $options);
    }


}