# 优雅的AI客户端调用

## 特点

- 优雅的调用方式
- 仅支持php 7.0以上版本
- 保留了原本的接口一致的参数
- 隐藏了开发者不需要关注的细节
- 高度抽象的类
- psr标准 方便集成

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
    
$res = AI::driver('baidu')
			->gateway('face')
			->url('http://aip.bdstatic.com/portal/dist/1543924308745/ai_images/logo.png')
			->detect();

if($res->success()){
    var_dump($res->toArray())
}else{
    var_dump($res->getErrMessage());
}

~~~



## LICENSE

[MIT](LICENSE)

