<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */


namespace Crisen\AI\Drivers\Baidu;


use Crisen\AI\Contracts\GatewayInterface;


class Speech implements GatewayInterface
{
    
    public function getName()
    {
        return 'nlp';
    }
}