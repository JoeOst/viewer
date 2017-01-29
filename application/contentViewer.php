<?php 
//По кнопке просмотра статьи - передаем с помощью get-параметра имя файла, которое должен обрабатывать новый скрипт - который по имени файла - поищет его в папке с контентом - если найдет - вернет его с помощью ob_get_contents, - и мы выведем его между нажими файлами header.php и footer.php - то есть не ломая нашу верстку. Если файл будет не найден - вернет браузеру залоговок 404.
ob_start();
ob_start();
require_once ('session.php');
require_once('../assets/templates/header.php');
require_once('content_reader.php');

$out1 = ob_get_contents();
ob_end_clean();

$content = getContent($config['content']);

$name = $_GET['name'];

foreach ($content as $item) :?>
	<?php  $search = false;?>
	<?php if ($name == strtolower($item['title'])) :?>
	<?php ob_start();
	$search = true;
	?>
	<div class="container">
	<div class="col-md-12">
        <h2><?=strstr($item['title'], '.',true);?></h2>
        <p><?=$item['content'];?></p>
        <a href="download.php?file=<?=$item['title'];?>" class="btn btn-primary">Download article</a>
     </div>
     </div>
     <hr>
     <?php $out2 = ob_get_contents(); 
     ob_end_clean();?>
 <?php break; ?>
<?php endif; ?>
<?php endforeach; 

ob_end_clean();

if ($search == false) {
	header("HTTP/1.1 404 Not Found");
     die();
}


echo($out1);
echo $out2;
require_once('../assets/templates/footer.php');