<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-4
 * description:
 */


namespace Crisen\AI\Drivers\Baidu\Gateways;


class Ocr extends AbstractBaiduGateway
{

    public function resourcePath(): array
    {
        return [
            'rest', '2.0', 'ocr', 'v1'
        ];
    }


    public function headers()
    {
        return [
            'Content-Type' => 'application/x-www-form-urlencoded'
        ];
    }

}
