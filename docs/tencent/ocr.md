# OCR

可用路由表

| 名称         | 路由          | 必选参数        |
| ------------ | ------------- | --------------- |
| 通用         | general       | image           |
| 身份证       | idcard        | image,card_type |
| 行驶证驾驶证 | driverlicense | image,type      |
| 营业执照     | bizlicense    | image           |
| 银行卡       | creditcard    | image           |
| 手写体       | handwriting   | image           |
| 车牌         | plate         | image           |
| 名片         | bc            | image           |

## 通用OCR识别

~~~
$path = 'path/to/some.jpg';

$res = $ai->ocr()->path($path)->general();

if($res->success()){
    var_dump($res->toArray());
}else{
    var_dump($res-->getErrMsg());
}
~~~

## 身份证识别

~~~
$path = 'path/to/some.jpg';

$res = $ai->ocr()->path($path)->idcard([
    'card_type' => 0  //0表示正面 1表示反面
]);

if($res->success()){
    var_dump($res->toArray());
}
~~~

## 行驶证 驾驶证 识别

~~~
$path = 'path/to/some.jpg';

$res = $ai->ocr()->path($path)->driverlicense([
    'type' => 0  //0-行驶证识别  1-驾驶证识别
]);

if($res->success()){
    var_dump($res->toArray());
}

~~~

## 营业执照识别

~~~
$path = 'path/to/some.jpg';

$res = $ai->ocr()->path($path)->bizlicense();

if($res->success()){
    var_dump($res->toArray());
}


~~~

## 银行卡

~~~
$path = 'path/to/some.jpg';

$res = $ai->ocr()->path($path)->creditcard();

if($res->success()){
    var_dump($res->toArray());
}


~~~



## 手写体

~~~
$path = 'path/to/some.jpg';

$res = $ai->ocr()->path($path)->handwriting();

if($res->success()){
    var_dump($res->toArray());
}

~~~



## 车牌

~~~
$path = 'path/to/some.jpg';

$res = $ai->ocr()->path($path)->plate();

if($res->success()){
    var_dump($res->toArray());
}
~~~



## 名片

~~~
$path = 'path/to/some.jpg';

$res = $ai->ocr()->path($path)->bc();

if($res->success()){
    var_dump($res->toArray());
}
~~~

