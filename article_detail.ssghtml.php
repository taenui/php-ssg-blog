<?php
if ( defined('STDIN') ) {
    $_GET['id'] = $argv[1];
}

require_once "data.php";

$articleId = $_GET['id'];
$selectedArticle = &getForPrintArticleById($articleId);
$pageTitle = $selectedArticle['pageTitle'];
$pageThumbUrl = $selectedArticle['pageThumbUrl'];
$pageDescription = $selectedArticle['pageDescription'];
$pageKeywordsStr = $selectedArticle['pageKeywordsStr'];

require_once "head.php";
?>

<section class="section-title con-min-width">
    <h1 class="con">
        <span>
            <i class="fas fa-newspaper"></i>
        </span>
        <span>
            DETAIL
        </span>
    </h1>
</section>

<section class="section-article-detail padding-0-10 con-min-width">
    <div class="con">
        <h1 class="article-list-box__title"><?=$selectedArticle["title"]?></h1>

        <div class="article-list-box__reg-date"><?=$selectedArticle["regDate"]?></div>
        
        <div class="article-list-box__writer">
            <span><?=$selectedArticle["writer"]?></span>
            <span><?=$selectedArticle["writerAvatar"]?></span>
        </div>

        <div class="article-list-box__tags">
            <?=getArticleTagsHtml($selectedArticle["id"])?>
        </div>
        
        <div class="article-list-box__body">
            <script type="text/x-template"><?=$selectedArticle['body']?></script>
            <div class="toast-ui-viewer"></div>
        </div>
    </div>
</section>

<section class="section-article-reply-box padding-0-10 con-min-width">
    <div class="con">
    <div id="disqus_thread"></div>
<script>
    
    (function() { // DON'T EDIT BELOW THIS LINE
    var d = document, s = d.createElement('script');
    s.src = 'https://b-a-nui-com.disqus.com/embed.js';
    s.setAttribute('data-timestamp', +new Date());
    (d.head || d.body).appendChild(s);
    })();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript
    </div>
</section>

<?php
require_once "foot.php";
?>