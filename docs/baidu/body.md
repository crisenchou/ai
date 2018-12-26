# 人体分析

路由列表

| 名称              | 路由            |
| ----------------- | --------------- |
| 人体关键点识别    | body_analysis   |
| 人体属性识别      | body_attr       |
| 人流量统计        | body_num        |
| 手势识别          | gesture         |
| 人像分割          | body_seg        |
| 驾驶行为分析      | driver_behavior |
| 人流量统计-动态版 | body_tracking   |



## 调用过程

> 下文中$ai变量均为百度ai实例 获得方法请[查看](README.md)

~~~
// 以人体关键点识别为例  人体关键点识别的路由为body_analysis 

//参数
$paranms = [
    'image' => base64_encode(file_get_contents('path/to/some_img.jpg'))
];

//调用过程
$res = $ai->body()->send('body_analysis',$paranms);

if($res->success()){
    var_dump($res->toArray());
}




~~~



