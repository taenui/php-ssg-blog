<?php
require_once "util.php";
require_once "app.php";

$siteTitle = "디자이너 태늬";
$siteDescription = "디자이너 김태늬입니다";
$siteKeywordsStr = "CSS, HTML, JS";
$siteName = "Taenui";
$siteThumbUrl = "https://raw.githubusercontent.com/taenui/blog/master/main.jpg";

// 태그정보 시작
$tagInfos = [
    "js" => [
        //"pageThumbUrl" => "자바스크립트 관련 글 전용 이미지"
        //"pageDescription" => "2021년 특별기획, 자바스크립트 관련 강좌 입니다."
    ],
    "html" => [
        //"pageThumbUrl" => "html 관련 글 전용 이미지"
    ]
];
// 태그정보 끝








$article4=[];
$article4["id"]=4;
$article4["title"] = "JS : 4화 ";
$article4["regDate"] = "2020-01-18 12:12:14";
$article4["writer"] = "김상화";
$article4["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-3"></use></svg>';
$article4["tags"] = ["HTML","CSS"];
$article4["body"] = <<<'EOT'
자바 
EOT;
?>






<!--게시물1-->

<?php

$siteTitle = "태늬";


$article1=[];
$article1["id"]= 1;
$article1["title"] = "JS : 1화 기초";
$article1["regDate"] = "2020-01-12 12:12:14";
$article1["writer"] = "김상화";
$article1["writerAvatar"] = '<svg viewBox="0 0 264 280"><use xlink:href="#avatar-3"></use></svg>';
$article1["tags"] = ["HTML","CSS"];
$article1["body"] = <<<'EOT'
# 실습환경 만들기

Javascript의 특징
```html
HTML+CSS와 함께 사용해 client side 웹 프로그램을 작성할 수 있다.
웹 브라우저에서 바로 실행이 가능하다.
```
alert 명령어
```html
alert 뒤에 따라오는 괄호 안에 들어있는 메시지를 브라우저 경고창에 띄워주는 명령어
```
실습방법
- Javascript 코드를 작성한다.
- lecture01.js
```html
alert('hello world');
```
- 해당 코드를 로드하는 HTML 파일을 작성한다
- index.html
```html
<html>
    <head>
        ...

        <<!--REPLACE:script-->></<!--REPLACE:script-->>
        ...
        </head>
        <>
        ...
    </ body>
</html>
```
- 브라우저에서 작성한 HTML 파일을 불러들여 결과를 확인한다.
```

EOT;
?>


<!--게시물2-->
<?php
$siteTitle = "태늬";


$article2=[];
$article2["id"]= 2;
$article2["title"] = "2화 명령어";
$article2["regDate"] = "2020-01-12 12:12:14";
$article2["writer"] = "김상화";
$article2["writerAvatar"] = 
'<svg viewBox="0 0 264 280"><use xlink:href="#avatar-3"></use></svg>';
$article2["tags"] = ["HTML","CSS"];
$article2["body"] = <<<'EOT'
# 개발자도구 (Developer Console)
```
- 브라우저의 우측 상단 메뉴에서 더보기, 개발자 도구 메뉴를 이용해 활성화
- 여러 탭 중 console 탭을 사용해 console 을 확인 가능
- 직접 명령어를 입력해 실행 가능하며 (>) , 그 결과를 바로 확인 가능 (<)
```

# console.log 명령어
```
console.log 뒤에 따라오는 괄호 안에 들어있는 메시지를 콘솔창에 출력하는 명령어

EOT;
?>


<!--게시물3-->

<?php
$siteTitle = "태늬";

$article3=[];
$article3["id"]= 3;
$article3["title"] = "3화 변수";
$article3["regDate"] = "2020-01-13";
$article3["writer"] = "김상화";
$article3["writerAvatar"] = 
'<svg viewBox="0 0 264 280"><use xlink:href="#avatar-3"></use></svg>';
$article3["tags"] = ["HTML","CSS", "JS"];
$article3["body"] = <<<'EOT'
# 변수 선언과 초기화

<h2>변수</h2>

- 프로그램 실행 도중 임의의 값을 저장해 두고 읽을 수 있는 공간
- 변수의 선언과 초기화
- 선언 : 컴퓨터에게 변수를 사용할 것이라고 선언(알려주는) 역할
- 초기화 : 선언한 변수에 처음으로 값을 저장하는 과정
- 변수에 값을 저장하는 법 : 대입연산자 (=) 를 활용
- 콤마(,)를 활용해 여러 변수를 동시에 선언, 초기화 가능

```
var variable_name;
variable_name = value;
```


# prompt() 명령어
- promprt 뒤에 따라오는 괄호 안에 들어있는 메세지를 사용자에게 보여주고, 문자열을 입력받는 명령
  - 변수에 값을 저장하는 구문과 함께 사용해서, 사용자가 입력한 값을 변수에 저장 가능
  ```
  var name=prompt("이름을 입력해 주세요");
  ```
EOT;

// 데이터 정리
$maxArticleId = getMaxArticleId();

$_allArticles = [];
$_tags = [];

for ( $i = $maxArticleId; $i > 0; $i-- ) {
    $varName = 'article' . $i;

    if ( isset($$varName) ) {
        $_allArticles[${$varName}['id']] = &$$varName;

        foreach ( $_allArticles[${$varName}['id']]['tags'] as $tag ) {
            $_tags[] = $tag;
        }
    }
}

$_tags = array_unique($_tags);
sort($_tags);

$_allArticlesByTag = [];

foreach ( $_tags as $tag ) {
    $_allArticlesByTag[$tag] = [];

    foreach ( $_allArticles as $article ) {
        if ( in_array($tag, $article['tags']) ) {
            $_allArticlesByTag[$tag][$article['id']] = $article;
        }
    }
}