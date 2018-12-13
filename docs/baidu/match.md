# 人脸对比

~~~
// 使用url图片进行对比
$res = $ai->face()->url('http://domain/some.jpg')->match();

// 使用base64编码图片进行对比
$res = $ai->face()->base64('Y3Jpc2VuY2hvdQ==')->match();

// 使用本地路径进行对比
$res = $ai->face()->path('/path/to/some.jpg')->match();

// 兼容官方可选参数
$res = $ai->face()->path('/path/to/some.jpg')->match([
    'face_type'        => 'LIVE',
    'quality_control'  => 'NONE'
    'liveness_control' => 'NONE'      
]);

if($res->success()){
    // do something
}
~~~