# 智能闲聊

~~~

$res = $ai->nlp()->textChat([
    'session'  => '10000',   //会话标识（应用内唯一）
    'question'  => '你叫什么名字'  //用户输入的聊天内容
]);


if($res->toArray()){
    var_dump($res->toArray());
}
~~~

