# 图片特效

## 滤镜

[查看滤镜特效编码](https://ai.qq.com/doc/ptuimgfilter.shtml#6-%E9%A2%84%E8%AE%BE%E6%BB%A4%E9%95%9C%E6%95%88%E6%9E%9C%E7%BC%96%E7%A0%81)

~~~
$res = $ai->ptu()->path('path/to/some_image.jpg')->imgFilter([
    'filter' => 1 //滤镜特效编码  
]);

if($res->success()){
    var_dump($res->toArray());
}

~~~

## 人脸美妆

[查看美妆编码](https://ai.qq.com/doc/facecosmetic.shtml#6-%E4%BA%BA%E8%84%B8%E7%BE%8E%E5%A6%86%E7%BC%96%E7%A0%81)

~~~
$res = $ai->ptu()->path('path/to/some_image.jpg')->faceCosmetic([
    'cosmetic' => 1 //美妆编码
]);


if($res->success()){
    var_dump($res->toArray());
}


~~~



## 人脸变妆

[查看变妆编码](https://ai.qq.com/doc/facedecoration.shtml#6-%E4%BA%BA%E8%84%B8%E5%8F%98%E5%A6%86%E7%BC%96%E7%A0%81)

~~~
$res = $ai->ptu()->path('path/to/some_image.jpg')->faceDecoration([
    'decoration' => 1 //变妆编码  
]);


if($res->success()){
    var_dump($res->toArray());
}


~~~



## 大头贴

[查看大头贴编码](https://ai.qq.com/doc/facesticker.shtml#6-%E5%A4%A7%E5%A4%B4%E8%B4%B4%E7%BC%96%E7%A0%81)

~~~

$res = $ai->ptu()->path('path/to/some_image.jpg')->faceSticker([
    'sticker' => 1 //大头贴编码  
]);

if($res->success()){
    var_dump($res->toArray());
}

~~~



## 颜龄检测

~~~
$res = $ai->ptu()->path('path/to/some_image.jpg')->faceAge();

if($res->success()){
    var_dump($res->toArray());
}



~~~

