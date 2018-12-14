# 人脸库管理

~~~
$config = [
     'app_id' => 'your appid',
     'api_key' => 'your api key',
     'secret_key' => 'your secret key'
];
$ai = AI::baidu($config);
~~~

> 特别说明: 在下文中的所有$ai变量都表示当前的百度AI实例

## 人脸注册

人脸注册的路由为facesetUser()

~~~
// 注册url形式的图片
$imgUrl = 'http://domain/someimg.jpg';
$group = 'some_group'; //百度ai人脸库必选参数
$user = 'some_user';
$ai->facesetUser()->url($imgUrl)->group($group)->user($user)->add();

//注册base64编码后的图片
$code = 'Y3Jpc2VuY2hvdQ==';
$ai->facesetUser()->base64($code)->group($group)->user($user)->add();

// 注册本地文件
$path = 'path/to/someimg.jpg';
$ai->facesetUser()->path($path)->group($group)->user($user)->add();

// 使用可选参数
$ai->facesetUser()->path($path)->group($group)->user($user)->add([
    'user_info'       => 'user info',
    'quality_control' => 'NONE',
    'liveness'        => 'NONE'
]);
~~~

## 人脸更新

人脸更新的路由为facesetUser()

~~~
// 以图片base64编码进行更新
$code = 'Y3Jpc2VuY2hvdQ==';
$ai->facesetUser()->base64($code)->group($group)->user($user)->update();

// 以图片url进行更新
$ai->facesetUser()
	->url('http://domain/some.jpg')
	->group($group)
	->user($user)
	->update();
	
// 以图片路径进行更新
$ai->facesetUser()
	->path('path/ti/some.jpg')
	->group($group)
	->user($user)
	->update();
	
// 以face_token 进行更新
$ai->facesetUser()->faceToken('facetoken')->group($group)->user($user)->update();

// 兼容官方可选参数
$ai->facesetUser()
	->path('path/ti/some.jpg')
	->group($group)
	->user($user)
	->update([
        'user_info'       => 'user info',
        'quality_control' => 'NONE',
        'liveness'        => 'NONE'
	]);
~~~

## 人脸删除

> 人脸删除的路由是faceset  和人脸注册的不一致

~~~
$group = 'some_group';
$user  = 'some_user';
$faceToken = 'face_token'; // 人脸注册时 返回的图片唯一标志 是人脸删除的必选参数
$res = $ai->faceset()->group($group)->user($user)->faceToken($faceToken )->delete();
if($res->success()){
    //do something
}
~~~

## 用户信息查询

~~~
// 查询特定group的信息
$ai->facesetUser()->user('some_user')->group('some_group')->get();

// 查询所有group的信息
$ai->facesetUser()->group()->user('some_user')->get();
~~~



## 获取用户人脸列表

用于获取一个用户的全部人脸列表

~~~
// 获取全部列表
$res = $ai->faceset()->group('some_group')->user('some_user')->get();

//获取部分列表
$res = $ai->faceset()
	->group('some_group')
	->user('some_user')
	->get([
        'start'  => '0',
        'length' => '1000'
	]);
	
// 接收返回数据
if($res->success()){
    var_dump($res->toArray());
}
~~~



## 获取用户列表

用于查询指定用户组中的用户列表。

~~~

$res = $ai->facesetGroup()->group('some_group')->users();
if($res->success()){
    var_dump($res->toArray());
}
~~~

## 复制用户

用于将已经存在于人脸库中的用户**复制到一个新的组**

~~~
$res = $ai->facesetUser()->user()->copy($src, $dest);
if($res->success()){
    // do something
}
~~~

## 删除用户

用于将用户从某个组中删除

~~~
//删除某个组的用户
$ai->facesetUser()->user('some_user')->group('some_group')->delete();

//删除所有组的用户
$ai->facesetUser()->user('some_user')->group()->delete();
~~~

## 创建用户组

用于创建一个空的用户组，如果用户组已存在 则返回错误

~~~
$res = $ai->facesetGroup()->group('other_group')->add();
if($res->success()){
    // create group successful
}
~~~

## 删除用户组

删除用户组下所有的用户及人脸，如果组不存在 则返回错误

> 注：组内的人脸数量如果大于500条，会在后台异步进行删除。在删除期间，无法向该组中添加人脸。1秒钟可以删除20条记录，相当于一小时可以将7万人的人脸组删除干净。

~~~
$ai->facesetGroup()->group('some_group')->delete();
~~~

## 组列表查询

~~~
//查询所有信息
$res = $ai->facesetGroup()->get();

//查询部分信息
$res = $ai->facesetGroup()->get([
    'start' => 0,
    'length' => 100,
]);

if($res->success()){
    var_dump($res->toArray());
}
~~~

