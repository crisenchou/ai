# 语义解析

## 意图成分

~~~

$res = $ai->nlp()->wordCom([
	'text' => '今天深圳的天气怎么样？明天呢'
]);


if($res->success()){
    var_dump($res->toArray());
}

~~~



## 情感分析

~~~
$res = $ai->nlp()->textPolar([
	'text' => '今天的天气不错呀'
]);


if($res->success()){
    var_dump($res->toArray());
}



~~~

