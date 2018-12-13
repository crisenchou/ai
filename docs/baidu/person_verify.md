# 身份验证

~~~
// 以网络图片地址进行验证
$ai->face()->url('http://domain/id_card.jpg')->verify([
    'id_card_number'  => 'id_number',//身份证号
    'name'            => 'name'  // 名字 注意中文名字需要utf8格式
]);
// 以本地路径进行验证
$ai->face()->path('/path/to/id_card.jpg')->verify([
    'id_card_number'  => 'id_number',//身份证号
    'name'            => 'name'  // 名字
]);

// 以图片base64编码进行验证
$ai->face()->base64('Y3Jpc2VuY2hvdQ==c')->verify([
    'id_card_number'  => 'id_number',//身份证号
    'name'            => 'name'  // 名字
]);

// 以face token 进行验证
$ai->face()->faceToken('face token')->verify([
    'id_card_number'  => 'id_number',//身份证号
    'name'            => 'name'  // 名字 
]);
~~~

[详细参数查看](https://ai.baidu.com/docs#/Face-PersonVerify-V3/top)