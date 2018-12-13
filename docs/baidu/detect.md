# 人脸检测

[官方详细参数](https://ai.baidu.com/docs#/Face-Detect-V3/07e55c24)

~~~
$ai = AI::baidu($config);

// 使用base64编码图片进行检索
$code = "image base64 code";
$res = $ai->face()->base64($code)->detect()

// 使用url图片地址
$url = "http://domain/someimg.jpg";
$res = $ai->face()->url($url)->detect();

// 使用 本地文件路径
$path = 'path/to/file.jpg';
$res = $ai->face()->path($url)->detect();

// 兼容官方原生参数
$params = [
    'face_field' => 'age,beauty,expression,face_shape',
     'max_face_num' => 1,
     'face_type' => 'LIVE'
];
$url = "http://domain/someimg.jpg";
$res = $ai->face()->url($url)->detect($params);

var_dump($res);




~~~

