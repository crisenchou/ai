<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-12
 * description:
 */

namespace Crisen\AI\Contracts;

interface  ResponseInterface
{


    /**
     * @return bool
     */
    public function success();


    /**
     * @return string
     */
    public function getErrMessage();


}


