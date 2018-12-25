<?php

/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */

namespace Crisen\AI\Drivers\Baidu\Gateways;


class Kg extends AbstractBaiduGateway
{


    public function resourcePath(): array
    {

        return [
            'rest', '2.0', 'kg', 'v1'
        ];
    }
    

}