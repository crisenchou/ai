# 语音识别

- 语音压缩格式编码

| 格式名称 | 格式编码 |
| -------- | -------- |
| PCM      | 1        |
| WAV      | 2        |
| AMR      | 3        |
| SILK     | 4        |

- 语音采样率编码

| 采样率 | 编码  |
| ------ | ----- |
| 8KHz   | 8000  |
| 16KHz  | 16000 |


## 语音识别

~~~
$res = $ai->aai()->asr([
    'format'   => 2, // 语音压缩格式编码
    'speech'   => base64_encode(file_get_contents('path/to/some_voice.wav')), //待识别语音（时长上限15s）
    'rete'     => 16000 //语音采样率编码
]);


if($res->success()){
    var_dump($res->toArray());
}



~~~

## 长语音识别

> speech 与 speech_url任意填写一个即可

~~~
$res = $ai->aai()->asrLong([
    'format'        => 1,
    'callback_url'  => 'http://domain.com/callback', //需用户提供后台回调url
    'speech'        => base64_encode(file_get_contents('path/to/some_voice.wav')), //待识别语音（时长上限15nmin）
    'speech_url'    => 'http://domain.com/some_voice.wav' //待识别语音下载地址（时长上限15min）
]);


if($res->success()){
    var_dump($res->toArray());
}

~~~



## 关键词检索

~~~
$res = $ai->aai()->detectKeyword([
    'format'        => 1,
    'callback_url'  => 'http://domain.com/callback', //需用户提供后台回调url
    'key_words'      => '天气',  //待识别关键词
    'speech'         => base64_encode(file_get_contents('path/to/some_voice.wav')), //待识别语音（时长上限15nmin）
    'speech_url'  => 'http://domain.com/some_voice.wav' //待识别语音下载地址（时长上限15min）
]);


if($res->success()){
    var_dump($res->toArray());
}

~~~

