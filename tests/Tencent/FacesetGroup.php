<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Tests\Tencent;


class FacesetGroup extends AbstractGatewayTest
{

    protected function gateway()
    {
        return 'faceset.group';
    }


    public function testGet()
    {
        $res = $this->gateway->get();
        $this->assertSuccess($res);
    }

    public function testUsers()
    {
        $res = $this->gateway->users([
            'group_id' => $this->group
        ]);
        $this->assertSuccess($res);
    }

}