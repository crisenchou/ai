<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Tests\Tencent;


class FacesetUser extends AbstractGatewayTest
{
    protected function gateway()
    {
        return 'faceset.user';
    }


    public function testAdd()
    {
        $res = $this->gateway->add([
            'group_ids' => $this->group,
            'person_id' => $this->user,
            'image' => $this->imageBase64Code(),
            'person_name' => 'crisen'
        ]);
        $this->assertSuccess($res);
    }


    public function testFaces()
    {
        $res = $this->gateway->faces([
            'person_id' => $this->user
        ]);
        $this->assertSuccess($res);
    }

    public function testGet()
    {
        $res = $this->gateway->get([
            'person_id' => $this->user
        ]);
        $this->assertSuccess($res);
    }

    public function testUpdate()
    {
        $res = $this->gateway->update([
            'person_id' => $this->user,
            'person_name' => 'crisenchou',
            'tag' => 'crisen-ai'
        ]);
        $this->assertSuccess($res);
    }


    public function testDelete()
    {
        $res = $this->gateway->update([
            'person_id' => $this->user
        ]);
        $this->assertSuccess($res);
    }

}