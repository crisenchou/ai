# 人脸识别

参数说明,腾讯ai仅支持base64编码后的图片,并且最大为1m,但是当前package提供了三种调用方式

所有支持image参数的接口 均可以用此方式来传递image参数

~~~
// base64 code调用
$code = 'image base64 code';
$ai->face()->base64($code)->detect();

// 图片url
$url = 'http://domain.com/some.jpg';
$ai->face()->url($url)->detect();

// 本地文件路径
$path = 'path/to/some.jpg';
$ai->face()->path($path )->detect();
~~~



| 名称           | 路由        | 参数                      |
| -------------- | ----------- | ------------------------- |
| 人脸检测与分析 | detect      | image,mode                |
| 多人脸检测     | multiDetect | image                     |
| 跨年龄人脸识别 | crosssAge   | source_image,target_image |
| 五官定位       | shape       | image                     |
| 人脸对比       | compare     | source_image,target_image |
| 人脸验证       | verify      | image,person_id           |



## 人脸检测与分析

~~~
$code = 'image base64 code';
$res = $ai->face()->base64($base64Code)->detect(['mode' => 0]);
if($res-success()){
    var_dump($res->toArray());
}
~~~



## 多人脸检测

~~~
$url = 'http://domain.com/some.jpg';
$res = $ai->face()->url($url)->multiDetect();
if($res-success()){
    var_dump($res->toArray());
}
~~~



## 跨年龄人脸识别

~~~
$sourceImgCode = 'source base64 code';
$destImgCode = 'dest base64 code';
$res = $ai->face()->crosssAge([
    'source_image' => $sourceImgCode,
    'target_image' => $destImgCode
]);
if($res-success()){
    var_dump($res->toArray());
}
~~~

## 五官定位

~~~
$path = 'path/to/some.jpg';
$res = $ai->face()->path($path)->shape();
if($res-success()){
    var_dump($res->toArray());
}

~~~

## 人脸对比

~~~
$sourceImgCode = 'source base64 code';
$destImgCode = 'dest base64 code';
$res = $ai->face()->compare([
    'source_image' => $sourceImgCode,
    'target_image' => $destImgCode
]);
if($res-success()){
    var_dump($res->toArray());
}
~~~

## 人脸验证

~~~
$path = 'path/to/some.jpg';
$res = $ai->face()->path($path)->verify([
    'person_id' => 'person0'
]);
if($res-success()){
    var_dump($res->toArray());
}

~~~

