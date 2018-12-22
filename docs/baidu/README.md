# 百度AI客户端

## 获取ai实例

~~~
use Crisen\AI\Ai;

.....

$config = [
     'app_id' => 'your appid',
     'api_key' => 'your api key',
     'secret_key' => 'your secret key'
];

$ai = AI::baidu($config);
~~~

> 特别说明 在后面的文章出现的$ai变量 如果没有特别说明 均为当前实例

## 选择路由

~~~
// 获取人脸识别路由
$gateway = $ai->face();
// 获取人脸库用户路由
$gateway = $ai->faceset();
....
~~~

## 必选图片参数优化

> 百度ai的图像参数有三种 base64 ,url,face_token 这里为了调用方便 因为进行了封装

~~~
// 以图片url的形式进行调用
$url = 'http://domain/someimg.jpg';
$gateway->url($url);
// 以base64编码图片进行调用
$code = 'Y3Jpc2VuY2hvdQ==';
$gateway->base64($code);
// 以本地路径
$path = 'path/to/some_img.jpg';
$gateway->path($path);
// 以百度ai的face token
$faceToken = 'face token';
$gateway->faceToken($path);
~~~

##  调用动作

~~~
// 如调用人脸检测
$res = $ai->face()->url($url)->detect();
~~~

## 兼容官方的可选参数格式

~~~
// 图片检索
$url = 'http://domain/someimg.jpg';
$ai->face()->url($url)->detect([
    'face_field'    => 'age',
    'max_face_num'  => '10',
    'face_type'     => 'LIVE'
]);

~~~

## 返回数据处理

~~~
$url = 'http://domain/someimg.jpg';
$res = $ai->face()->url($url)->detect([
    'face_field'    => 'age',
    'max_face_num'  => '10',
    'face_type'     => 'LIVE'
]);
if($res->success()){
    var_dump($res->toArray());
}else{
    // do something with exception
}
~~~

