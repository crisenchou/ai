<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */

namespace Crisen\AI\Drivers\Baidu\Gateways;


use Crisen\AI\Contracts\GatewayInterface;

class ImageCensor implements GatewayInterface
{
    
    public function getName()
    {
        return 'antiporn';
    }
}