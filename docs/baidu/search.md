## 人脸搜索

## 1:n识别搜索

~~~
// 以url图片进行搜索
$ai->face()->url('http://domain/some.jpg')->groupList('some_group')->search();
// 以base64编码在多个组中进行搜索
$ai->face()->base64('Y3Jpc2VuY2hvdQ==')->groupList([
    'group1','group2','group3'
])->search();
// 以本地图片路径进行搜索
$ai->face()->path('/path/to/some.jpg')->groupList('some_group')->search();

// 兼容官方可选参数
$ai->face()->path('/path/to/some.jpg')->groupList('some_group')->search([
    'quality_control'  => 'NONE',
    'liveness_control' => 'NONE',
    'user_id'          => 'some_user',
    'max_user_num'     => '1'
]);
~~~

## m:n 搜索


~~~
// 以url图片进行搜索
$ai->face()->url('http://domain/some.jpg')->groupList('some_group')->multiSearch();
// 以base64编码在多个组中进行搜索
$ai->face()->base64('Y3Jpc2VuY2hvdQ==')->groupList([
    'group1','group2','group3'
])->search();
// 以本地图片路径进行搜索
$ai->face()->path('/path/to/some.jpg')->groupList('some_group')->search();

// 兼容官方可选参数
$ai->face()->path('/path/to/some.jpg')->groupList('some_group')->search([
	'max_face_num'     => '10',
	'match_threshold'  => '80',
    'quality_control'  => 'NONE',
    'liveness_control' => 'NONE',
    'max_user_num'          => '20',
]);
~~~

