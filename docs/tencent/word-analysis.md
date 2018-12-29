# 基础文本分析

## 分词

~~~
$res = $ai->nlp()->wordSeg([
    'text' => '今天天气怎么样'
]);


if($res->success()){
    var_dump($res->toArray());
}


~~~



## 词性

~~~
$res = $ai->nlp()->wordPos([
    'text' => '今天天气怎么样'
]);


if($res->success()){
    var_dump($res->toArray());
}

~~~





## 专有名词

~~~

$res = $ai->nlp()->wordNer([
    'text' => '今天天气怎么样'
]);


if($res->success()){
    var_dump($res->toArray());
}


~~~



## 同义词

~~~

$res = $ai->nlp()->wordSyn([
    'text' => '今天天气怎么样'
]);

if($res->success()){
    var_dump($res->toArray());
}


~~~

