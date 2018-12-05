<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */


namespace Crisen\AI\Drivers\Baidu\Gateways;


use Crisen\AI\Contracts\GatewayInterface;


class ImageSearch implements GatewayInterface
{
    public $gateway = 'image-classify';
    public $gatewayVersion = 'v3';


    public function getName()
    {
        return 'image-classify';
    }
}