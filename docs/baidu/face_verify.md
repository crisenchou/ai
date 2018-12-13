# 在线活体检测

~~~php

// 以url形式的图片进行检测
$res = $ai->face()->url('http://domain/some_img.jpg')->faceVerify();

// 以图片base64code进行检测
$res = $ai->face()->base64('Y3Jpc2VuY2hvdQ==')->faceVerify();

// 以本地图片路径进行检测
$res = $ai->face()->path('/path/to/some_img.jpg')->faceVerify();

// 处理请求后的数据
if($res->success()){
    var_dump($res->toArray());
}
~~~

