<?php
/**
 * author: crisen
 * email: crisen@crisen.org
 * date: 18-12-17
 * description:
 */

namespace Crisen\AI\Tests\Tencent;


class FacesetTest extends AbstractGatewayTest
{


    protected function gateway()
    {
        return 'faceset';
    }


    public function testGet()
    {
        $base64Code = $this->imageBase64Code();
        $res = $this->gateway->base64($base64Code)->get([
            'face_id' => 'face0',
            'tag' => 'more info'
        ]);
        $this->assertSuccess($res);
    }


    public function testAdd()
    {
        $base64Code = $this->imageBase64Code();
        $res = $this->gateway->base64($base64Code)->add([
            'person_id' => $this->user,
            'tag' => 'more info'
        ]);
        $this->assertSuccess($res);
    }


    public function testDelete()
    {
        $res = $this->gateway->delete([
            'person_id' => $this->user,
            'face_ids' => '2214731677930908309'
        ]);
        $this->assertSuccess($res);
    }


}