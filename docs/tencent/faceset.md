# 人脸库管理

路由列表信息

| 名称             | 网关         | 路由   | 参数                                                         |
| ---------------- | ------------ | ------ | ------------------------------------------------------------ |
| 增加人脸         | faceset      | add    | image,person_id,tag [查看参数详情](https://ai.qq.com/doc/addface.shtml) |
| 删除人脸         | faceset      | delete | person_id,face_ids                                           |
| 获取人脸信息     | faceset      | get    | face_id                                                      |
| 用户组列表       | facesetGroup | get    |                                                              |
| 用户组个体列表   | facesetGroup | users  | group_id                                                     |
| 个体创建         | facesetUser  | add    | group_ids,person_id,image,person_name                        |
| 获取个体信息     | facesetUser  | get    | person_id                                                    |
| 更新个体信息     | facesetUser  | update | person_id,person_name,tag                                    |
| 删除个体         | facesetUser  | delete | person_id                                                    |
| 获取个体人脸列表 | facesetUser  | faces  | person_id                                                    |
| 人脸搜索         | face         | search | image,group_id,topn                                          |

## 增加人脸

~~~
$path = 'path/to/some.jpg';
$res = $ai->faceset()->path($path)->add();
if($res->success()){
    var_dump(res->toArray());
}
~~~

## 删除人脸

~~~
// 删除人脸时 需要先获取个体人脸列表 获取到face_ids 然后调用删除人脸即可删除
$path = 'path/to/some.jpg';
$res = $ai->faceset()->path($path)->delete([
    'person_id' => 'person0',
    'face_ids'  => '2214731677930908309' 
]);
if($res->success()){
    var_dump(res->toArray());
}
~~~

## 获取人脸信息

~~~
$res = $ai->faceset()->delete([
    'face_id' => '2214731677930908309'
]);
if($res->success()){
    var_dump(res->toArray());
}
~~~

## 用户组列表

~~~
$res = $ai->facesetGroup()->get();

if($res->success()){
    var_dump(res->toArray());
}

~~~



## 用户组个体列表

~~~
$res = $ai->facesetGroup()->users([
    'group_id' => 'group0'
]);

if($res->success()){
    var_dump(res->toArray());
}
~~~



## 个体创建

~~~
$path = 'path/to/some.jpg';

$res = $ai->facesetUser()->path($path)->add([
    'group_ids' => 'group0',
    'person_id' => 'person0',
    'person_name' => 'crisen'
]);

if($res->success()){
    var_dump(res->toArray());
}



~~~

## 获取个体信息

~~~
$path = 'path/to/some.jpg';

$res = $ai->facesetUser()->get([
    'person_id' => 'person0'
]);

if($res->success()){
    var_dump(res->toArray());
}

~~~



## 更新个体信息

~~~
$res = $ai->facesetUser()->update([
    'person_id' => 'person0',
    'person_name' => 'crisen',
    'tag'   => 'a coder'
]);

if($res->success()){
    var_dump(res->toArray());
}
~~~



## 删除个体

~~~

$res = $ai->facesetUser()->delete([
    'person_id' => 'person0',
]);

if($res->success()){
    var_dump(res->toArray());
}

~~~



## 获取个体列表

~~~
$res = $ai->facesetUser()->faces([
    'person_id' => 'person0',
]);

if($res->success()){
    var_dump(res->toArray());
}

~~~



## 人脸搜索

~~~
$path = 'path/to/some.jpg';

$res = $ai->face()->path($path)->search([
    'group_id' => 'person0',
    'topn'     => 5
]);

if($res->success()){
    var_dump(res->toArray());
}

~~~

