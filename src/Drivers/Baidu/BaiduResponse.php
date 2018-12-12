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

    public function __construct(array $data)
    {
        $this->data = $data;
    }


    public function __get($name)
    {
        if (array_key_exists($this->data, $name)) {
            return $this->data[$name];
        }
        throw new Exception('property not exist');
    }

    public function success()
    {
        if ($this->data['error_code'] == 0) {
            return true;
        }
        return false;
    }

    public function gerErrMessage()
    {
        if (!$this->success()) {
            return $this->data['error_msg'];
        }
    }

    public function toArray()
    {
        return $this->data;
    }


}