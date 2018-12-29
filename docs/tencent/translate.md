# 机器翻译

## 文本翻译

[查看翻译类型](https://ai.qq.com/doc/nlptrans.shtml#5-%E7%BF%BB%E8%AF%91%E7%B1%BB%E5%9E%8B%E5%AE%9A%E4%B9%89)

~~~
$res = $ai->nlp()->textTranslate([
    'type'  => 0, //翻译类型
    'text'  => ;今天天气怎么样;
]);

if($res->success()){
    var_dump($res->toArray());
}




~~~

## 语音翻译

语音压缩格式编码 对应表

| 格式名称 | 格式编码 |
| -------- | -------- |
| AMR      | 3        |
| SILK     | 4        |
| PCM      | 6        |
| MP3      | 8        |
| AAC      | 9        |

~~~

$res = $ai->nlp()->speechTranslate([
    'format'  => 3, //语音压缩格式编码
    'seq'     => 0, //语音分片所在语音流的偏移量（字节）
    'end'     =>  0, //是否结束分片标识，定义见下文描述
    'session_id' => '10000',  //语音唯一标识（同一应用内）
    'speech_chunk' =>  base64_encode(file_get_contents('path/to/some_speech.mp3')),//语言分片数据的base64编码
    'source'  => 'zh'  //源语言缩写
    'target'   => 'en' //目标语言缩写
    
]);

if($res->success()){
    var_dump($res->toArray());
}

~~~

支持的语言定义

| 语言                 | 缩写 |
| -------------------- | ---- |
| 中文                 | zh   |
| 英文                 | en   |
| 日文                 | jp   |
| 韩文                 | kr   |
| 自动识别（中英互译） | auto |

| 源语言 | 支持目标语言 |
| ------ | ------------ |
| en     | zh           |
| zh     | en, jp, kr   |
| jp     | zh           |
| kr     | zh           |

## 图片翻译

~~~
$res = $ai->nlp()->path('path/to/some_image.jpg')->imageTranslate([
    'session_id'  => time(),
    'scene'       => 'doc',
    'source'      => 'zh', //源语言缩写
    'target'   => 'en' //目标语言缩写
]);

if($res->success()){
    var_dump($res->toArray());
}
~~~

支持语言定义

| 语言                 | 缩写 |
| -------------------- | ---- |
| 中文                 | zh   |
| 英文                 | en   |
| 日文                 | jp   |
| 韩文                 | kr   |
| 自动识别（中英互译） | auto |

| 源语言 | 支持目标语言 |
| ------ | ------------ |
| en     | zh           |
| zh     | en, jp, kr   |
| jp     | zh           |
| kr     | zh           |

## 语种识别

~~~
$res = $ai->nlp()->textDetect([
    'text'             => '今天天气怎么样',
    'candidate_langs'  => 'zh',
    'force'            => 0
]);

if($res->success()){
    var_dump($res->toArray());
}
~~~

支持语言定义

| 语言 | 缩写 |
| ---- | ---- |
| 中文 | zh   |
| 英文 | en   |
| 日文 | jp   |
| 韩文 | kr   |