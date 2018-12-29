# 图片识别

## 看图说话

~~~
$res = $ai->vision()->path('path/to/some_image.jpg')->imgToText([
    'session_id'  => time()
]);

$res = $ai->vision()->url('http://domain.com/some_image.jpg')->imgToText([
    'session_id'  => time()
]);


if($res->success()){
    var_dump($res);
}

~~~

## 多标签识别

~~~
$res = $ai->image()->path('path/to/some_image.jpg')->tag();

if($res->success()){
    var_dump($res);
}
~~~

## 模糊图片识别

~~~

$res = $ai->image()->path('path/to/some_image.jpg')->fuzzy();

if($res->success()){
    var_dump($res);
}

~~~

## 美食图片识别

~~~

$res = $ai->image()->path('path/to/some_image.jpg')->food();

if($res->success()){
    var_dump($res);
}

~~~

## 场景识别

~~~
$res = $ai->vision()->path('path/to/some_image.jpg')->scener([
    'format'  => 1, // 图片格式 1表示JPG格式（image/jpeg）
    'topk'    => 1, // 返回结果个数
]);

if($res->success()){
    var_dump($res);
}
~~~

##  物体识别

~~~

$res = $ai->vision()->path('path/to/some_image.jpg')->object([
    'format'  => 1, // 图片格式 1表示JPG格式（image/jpeg）
    'topk'    => 1, // 返回结果个数
]);

if($res->success()){
    var_dump($res);
}

~~~

