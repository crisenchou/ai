<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-12
 * description:
 */

namespace Crisen\AI\Drivers\Baidu;

use Crisen\AI\Contracts\ResponseInterface;
use Crisen\AI\Exceptions\Exception;

class BaiduResponse implements ResponseInterface
{
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

        if (array_key_exists($name, $this->data['result'])) {
            return $this->data['result'][$name];
        }

        throw new Exception('property not exist');
    }


    /**
     * @return bool
     */
    public function success()
    {
        if (!isset($this->data['error_code'])) {
            return true;
        }

        if ($this->data['error_code'] == 0) {
            return true;
        }
        return false;
    }


    /**
     * @return mixed|string
     */
    public function getErrMsg()
    {
        if (!$this->success()) {
            return $this->data['error_msg'];
        }
    }


    /**
     * @return array
     */
    public function toArray()
    {
        if (isset($this->data['result'])) {
            return $this->data['result'];
        }
        return $this->data;
    }
}
