<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Tencent;


use Crisen\AI\Contracts\ResponseInterface;
use Crisen\AI\Exceptions\Exception;

class TencentResponse implements ResponseInterface
{

    const SUCCESS = 0;

    protected $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }


    /**
     * @param $name
     * @return mixed
     * @throws Exception
     */
    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        if (array_key_exists($name, $this->data['data'])) {
            return $this->data['data'][$name];
        }

        throw new Exception('property not exist');
    }

    public function toArray()
    {
        return $this->data['data'];
    }

    public function success()
    {
        if (is_array($this->data) && $this->data['ret'] === self::SUCCESS) {
            return true;
        }
        return false;
    }


    public function getErrMsg()
    {
        if (!$this->success()) {
            return $this->data['msg'];
        }
        return true;
    }

}