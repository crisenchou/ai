<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Drivers\Youtu\Gateways;


use Crisen\AI\Contracts\ShouldSign;

class Car extends AbstractYoutuGateway implements ShouldSign
{

    /**
     * @return array
     */
    protected function resourcePath(): array
    {
        return ['api'];
    }


    /** 车辆属性识别
     * @param array $options
     * @return mixed
     * @throws \Crisen\AI\Exceptions\Exception
     */
    public function classify(array $options = [])
    {
        return $this->send('carclassify', $options);
    }


}