# 优雅的AI客户端调用

## 特点

- 优雅的调用方式
- 仅支持php 7.0以上版本
- 保留了原本的接口一致的参数
- 隐藏了开发者不需要关注的细节
- 高度抽象的类
- 符合psr标准

## 支持的平台

- 百度AI平台

## 安装

~~~
composer require  "crisen/ai":"dev-master"
~~~

## 使用演示

~~~php
use Crisen\AI\AI;

...
    
$response = AI::driver('baidu')
			->gateway('face')
			->url('http://aip.bdstatic.com/portal/dist/1543924308745/ai_images/logo.png')
			->detect();
var_dump($response);

~~~



