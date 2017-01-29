
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <title>Simple content viewer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Simple content viewer</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <?php if(!array_key_exists('auth',$_SESSION)):?>
            <form class="navbar-form navbar-right" action="application/login.php" method="post">
                <div class="form-group">
                    <input type="text" placeholder="Username" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" placeholder="Password" name="password" class="form-control">
                </div>
                <button type="submit" class="btn btn-success">Sign in</button>
            </form>
                <?php else: ?>
                <a href="application/logout.php" class="btn btn-success pull-right">
                    <?=$_SESSION['auth']?></a>
                
            <?php endif;?>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a jumbotron and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>


<?php if(array_key_exists('auth',$_SESSION)):?>
<div class="container">
    <form enctype="multipart/form-data" action="application/add_article.php" method="post">
    <input type="hidden" name="MAX_FILE_SIZE" value="3000000" >

    <b><i>Add own article:</i></b><input type="file" name="userfile" id="file">
    <input type='submit' name='send' value='Add article' class='btn btn-default'>
</form>
</div>

<hr>
 <?php endif;?>
 