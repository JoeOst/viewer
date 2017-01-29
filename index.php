<?php
require_once ('application/config.php');
require_once ('application/session.php');
require_once('assets/templates/header.php');
require_once('application/content_reader.php');

$content = getContent($config['content']);
?>

<?php if(!empty($content)):?>
<div class="container">
    <div class="row">
        <?php foreach ($content as $item):?>
        <div class="col-md-4">
            <h2><?=strstr($item['title'], '.',true);?></h2> <!--В заголовки статей выводить имя файла без расширения -->
            <p><?=substr($item['content'], 0, 75). "...";?></p> <!--В превью контента статьи вывести первые 75 символов, затем троеточие.-->
            <p><a class="btn btn-default" href="application/contentViewer.php?name=<?=strtolower($item['title'])?>" role="button">View details &raquo;</a></p>
        </div>
        <?php endforeach;?>
    </div>
</div>
<?php endif?>
    <hr>

<?php
require_once('assets/templates/footer.php');

