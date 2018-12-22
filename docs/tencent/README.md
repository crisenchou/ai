# 腾讯AI客户端

### 获取ai实例

~~~
use Crisen\AI\Ai;

.....

$config = [
     'app_id' => 'your appid',
      'app_key' => 'your secret id',
];

$ai = AI::tencent($config);

~~~

> 特别说明 在后面的文章出现的$ai变量 如果没有特别说明 均为当前实例

## 选择路由

~~~
//人脸识别
$gateway = $ai->face();
// 人脸库管理
$gateway = $ai->faceset();
~~~

## 调用动作

~~~
$res = $gateway->detect([
    'image' => 'some base 64 code'
]);

$res = $gateway->base64('some base 64 code')->detect();

~~~

