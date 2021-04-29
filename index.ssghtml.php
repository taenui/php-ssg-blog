<?php
require_once "data.php";
require_once "head.php";
$articles = &getArticles();
?>
<link rel="stylesheet" href="css/common.css">
<script src="js/common.js" defer></script>


<div class="test">
<div class="test">

<section class="section-title con-min-width">
<h1 class="con">
  <span>
    <i class="fas fa-fire"></i>
  </span>
  <span>
    LATEST ARTICLES
  </span>
</h1>
</section>

<section class="section-latest-articles con-min-width">

<div class="con">
  <div class="article-list-box">
    <ul>
      <?php for ( $i = 4; $i >= 1; $i-- ) { ?>
      <?php
      $articleVarName = "article" . $i;
      $article = $$articleVarName;
      ?>
      <li>
        <h1 class="article-list-box__title"><a href="article_detail_<?=$article["id"]?>.ssghtml.php"><?=$article["title"]?></a></h1>
        <div class="article-list-box__reg-date"><?=$article["regDate"]?></div>
        <div class="article-list-box__writer">
          <span><?=$article["writer"]?></span>
          <span><?=$article["writerAvatar"]?></span>
        </div>
        <div class="article-list-box__body">
          <script type="text/x-template"><?=$article['body']?></script>
          <div class="toast-ui-viewer"></div>
        </div>
      </li>
      <?php } ?>
    </ul>
=======
  <div class="con">
    <div class="article-list-box">
      <ul>
        <?php foreach ( $articles as $article ) { ?>
        <li>
          <h1 class="article-list-box__title"><a href="<?=getArticleLink($article["id"])?>"><?=$article["title"]?></a></h1>
          <div class="article-list-box__reg-date"><?=$article["regDate"]?></div>
          <div class="article-list-box__writer">
            <span><?=$article["writer"]?></span>
            <span><?=$article["writerAvatar"]?></span>
          </div>
          <div class="article-list-box__tags">
            <?=getArticleTagsHtml($article["id"])?>
          </div>
          <div class="article-list-box__body">
            <script type="text/x-template"><?=$article['body']?></script>
            <div class="toast-ui-viewer"></div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>

  </div>
</div>
</section>




<h1>codepen</h1>
<div>2020-01-12 12:12:14</div>
<div>
  <script type="text/x-template">
      # codepen
```codepen
https://codepen.io/yooy1551/embed/NWRzLRd?height=265&theme-id=light&default-tab=js,result
```

```youtube
hOzTPkWpcmk
```
  </script>
  <div class="toast-ui-viewer"></div>
  </li>
  </ul>
</div>
</div>
      </div>
</section>
</div>

<?php
require_once "foot.php";
?>