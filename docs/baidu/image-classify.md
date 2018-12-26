## 图像处理与识别

路由列表

| 名称                     | 路由                     |
| ------------------------ | ------------------------ |
| 通用物体和场景识别高级版 | advanced_general         |
| 图像主体检测             | object_detect            |
| 菜品识别                 | dish                     |
| 自定义菜品识别           | realtime_search/dish/add |
| logo商标识别             | logo                     |
| 动物识别                 | animal                   |
| 植物识别                 | plant                    |
| 花卉识别                 | flower                   |
| 果蔬类食材识别           | classify/ingredient      |
| 地标识别                 | landmark                 |
| 车型识别                 | car                      |
| 车辆检测                 | vehicle_detect           |
| 车流统计                 | traffic_flow             |

## 调用方式

> 下文中$ai变量均为百度ai实例 获得方法请[查看

~~~
// 以logo商标识别为例  logo商标识别的路由是logo 因为只要指定imageClassfy之后send到logo路由 并带上参数即可
//参数
$paranms = [
    'image' => base64_encode(file_get_contents('path/to/some_img.jpg')),
    'custom_lib' => 1
];

//调用过程
$res = $ai->imageClassfy()->send('logo',$paranms);

if($res->success()){
    var_dump($res->toArray());
}

~~~

