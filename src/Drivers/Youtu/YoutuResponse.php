<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Youtu;


use Crisen\AI\Contracts\ResponseInterface;

class YoutuResponse implements ResponseInterface
{


    protected $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function success()
    {

        // TODO: Implement success() method.
    }


    public function getErrMsg()
    {
        // TODO: Implement getErrMsg() method.
    }

}