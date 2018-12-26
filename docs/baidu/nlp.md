# 自然语言处理

路由列表

| 名称                      | 路由               |
| ------------------------- | ------------------ |
| 词法分析接口              | lexer              |
| 依存句法分析接口          | depparser          |
| 词向量表示接口            | word_emb_vec       |
| DNN语言模型接口           | dnnlm_cn           |
| 词义相似度接口            | word_emb_sim       |
| 短文本相似度接口          | simnet             |
| 评论观点抽取接口          | comment_tag        |
| 情感倾向分析接口          | sentiment_classify |
| 文章标签接口              | keyword            |
| 文章分类接口              | topic              |
| 文本纠错接口              | ecnet              |
| 新闻摘要接口              | news_summary       |
| 对话情绪识别接口          | emotion            |
| 分词接口(旧版)            | wordseg            |
| 词性标注接口(旧版)        | wordpos            |
| 中文词向量表示接口(旧版)  | wordembedding      |
| 中文DNN语言模型接口(旧版) | dnnlm_cn           |
| 短文本相似度接口(旧版)    | simnet             |
| 评论观点抽取接口（旧版）  | comment_tag        |

## 调用方式

> 下文中$ai变量均为百度ai实例 获得方法请[查看](README.md)

~~~
//参数

$params = [
    'test' => 'some text need to anylises'
];

// 词法分析的路由lexer
$res = $ai->nlp()->send('lexer',$params);

// 依存句法分析的路由depparser
$res = $ai->nlp()->send('depparser',$params);


//处理返回结果
if($res->success()){
    var_dump($res->toArray());
}
~~~



~~~

~~~

