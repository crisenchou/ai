<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */


namespace Crisen\AI\Drivers\Baidu\Gateways;


class Nlp extends AbstractBaiduGateway
{
    public function resourcePath(): array
    {

        return [
            'rpc', '2.0', 'nlp','v1'
        ];
    }

}