# ocr 光学文字识别

## 调用说明

~~~
// 以通用文字识别为例
// 官方url为 https://aip.baidubce.com/rest/2.0/ocr/v1/general_basic
//          |----------url----------|----gateway--|----route---------|
//          |--url默认配置-----------|----ocr------|---general_basic--|

// 调用示例
//  $ai->gateway()->send('route', $params);

//获取ai实例
$config = [
     'app_id' => 'your appid',
     'api_key' => 'your api key',
     'secret_key' => 'your secret key'
];
$ai = AI::baidu($config)
//获取ocr网关
$gateway = $ai->ocr();
//路由
$route = 'general_basic';
//参数
$params = [
    'url' => 'http://domain/some_image.jpg',
    'language_type' => 'ENG'
];
//发送请求
$res = $gateway->send($route,$params);
if($res->success()){
    var_dump($res);
}else{
    var_dump($res->gerErrMsg());
}

~~~



## 可用路由列表

| 名称                           | 路由                      |
| ------------------------------ | ------------------------- |
| 通用文字识别                   | general_basic             |
| 通用文字识别（高精度版）       | accurate_basic            |
| 通用文字识别（含位置信息版）   | general                   |
| 通用文字识别（含位置高精度版） | accurate                  |
| 通用文字识别（含生僻字版）     | general_enhanced          |
| 手写文字识别                   | handwriting               |
| 身份证识别                     | idcard                    |
| 银行卡识别                     | bankcard                  |
| 营业执照识别                   | business_license          |
| 护照识别                       | passport                  |
| 名片识别                       | business_card             |
| 户口本识别                     | household_register        |
| 出生医学证明识别               | birth_certificate         |
| 港澳通行证识别                 | HK_Macau_exit&entrypermit |
| 台湾通行证识别                 | taiwan_exit&entrypermit   |
| 表格文字识别(异步接口)         | form_ocr/request          |
| 表格文字识别(同步接口)         | form                      |
| 通用票据识别                   | receipt                   |
| 增值税发票识别                 | vat_invoice               |
| 火车票识别                     | train_ticket              |
| 出租车票识别                   | taxi_receipt              |
| 定额发票识别                   | quota_invoice             |
| 驾驶证识别                     | driving_license           |
| 行驶证识别                     | vehicle_license           |
| 车牌识别                       | license_plate             |
| 机动车销售发票识别             | vehicle_invoice           |
| 车辆合格证识别                 | vehicle_certificate       |
| 车辆VIN码识别                  | vin_code                  |
| 二维码识别                     | qrcode                    |
| 数字识别                       | numbers                   |
| 网络图片文字识别               | webimage                  |
| 彩票识别                       | lottery                   |

