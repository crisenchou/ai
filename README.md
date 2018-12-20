# 优雅的AI客户端调用

官方的sdk用起来的感觉实在是太忧伤了,我追求更加优雅的调用方式

## 特点

- 优雅的调用方式
- 仅支持php 7.0以上版本
- 参数兼容原生接口
- 隐藏了开发者不需要关注的细节
- 高度抽象的类
- 符合psr4标准 方便集成到各种项目中

## 支持的平台

- 百度AI平台
- 腾讯AI平台(即将到来)

## 安装

~~~
composer require  "crisen/ai":"^1.0.0"
~~~

laravel框架使用请移步[这里](https://github.com/crisenchou/laravel-ai)

## 使用示例

~~~php

use Crisen\AI\AI;

...

$config = [
     'app_id' => 'your appid',
     'api_key' => 'your api key',
     'secret_key' => 'your secret key'
];

// 图片检索
$res = AI::baidu($config)
	->face()
	->url('http://aip.bdstatic.com/portal/dist/1543924308745/ai_images/logo.png')
	->detect();

if($res->success()){
    var_dump($res->toArray())
}else{
    var_dump($res->getErrMsg());
}

~~~

## 文档

[详细文档](https://doc.crisen.org/ai)

## 寄语

欢迎广大的小伙伴提交issue 和 pull request

## LICENSE

[MIT](LICENSE)

