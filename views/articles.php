<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> My first Blog</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h1>My First Blog</h1>
         <ol class="breadcrumb"> 
          <li class="breadcrumb-item active">Home page</li>
         </ol> 
        <a href="admin" class="btn btn-primary">Administration panel</a>
        <div>
            <?php foreach($articles as $a): ?>
        <div class="article">
            <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
            <p class="published"> Published: <?=$a['date']?></p>
             <p><?=articles_intro($a['content'])?></p>
            </div>
            <?php endforeach ?>
        </div>
         </div>
 <footer>
    <div class="panel panel-primary">
    <div class="panel-heading">My First Blog <br>Copyright &copy; 2015</div>
    </div>
   </footer>
       
    </body>
     

</html>