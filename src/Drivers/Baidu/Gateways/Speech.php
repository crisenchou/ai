<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */


namespace Crisen\AI\Drivers\Baidu;


use Crisen\AI\Drivers\Baidu\Gateways\AbstractBaiduGateway;


class Speech extends AbstractBaiduGateway
{


    public function resourcePath(): array
    {
        return [
            'rest', '2.0', 'image-classify', 'v3'
        ];
    }


    public function send($action, $data = [])
    {
        // TODO: Implement send() method.
    }

}