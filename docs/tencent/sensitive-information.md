## 敏感信息审核

## 暴恐识别

~~~

$res = $ai->image()->path('path/to/some_image.jpg')->terrorism();

if($res->success()){
    var_dump($res->toArray());
}

~~~



## 图片鉴黄

~~~

$res = $ai->vision()->path('path/to/some_image.jpg')->porn();

if($res->success()){
    var_dump($res->toArray());
}
~~~

