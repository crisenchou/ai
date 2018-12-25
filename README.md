# 优雅的AI客户端调用

官方的sdk用起来的感觉实在是太忧伤了,换一种更好的调用方式吧

## 特点

- 优雅的调用方式
- 仅支持php 7.0以上版本
- 参数兼容原生接口
- 隐藏了开发者不需要关注的细节
- 高度抽象的类
- 符合psr4标准 方便集成到各种项目中

## 支持的平台

- 百度AI平台
- 腾讯AI平台

## 安装

~~~
composer require  "crisen/ai":"^1.0.0"
~~~

laravel框架,请点击[这里](https://github.com/crisenchou/laravel-ai)

## 使用示例

~~~php

use Crisen\AI\AI;

...

//百度ai
$baiduConfig = [
     'app_id' => 'your appid',
     'api_key' => 'your api key',
     'secret_key' => 'your secret key'
];
$ai = AI::baidu($baiduConfig);
//腾讯ai
$tencentConfig = [
     'app_id' => 'your appid',
     'app_key' => 'your secret id',
];
$ai = AI::tencent($tencentConfig);

// 图片检索
$url = 'http://aip.bdstatic.com/portal/dist/1543924308745/ai_images/logo.png';
$res = 	$ai->face()->url($url)->detect();
if($res->success()){
    var_dump($res->toArray())
}else{
    var_dump($res->getErrMsg());
}
~~~

## 文档

[详细文档](https://doc.crisen.org/ai)

## LICENSE

[MIT](LICENSE)

