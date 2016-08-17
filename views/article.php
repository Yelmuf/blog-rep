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
        <li class="breadcrumb-item active"><a href="index.php">Home</a></li>
        <li>Article</li>
         </ol>
        <a href="admin" >Administration panel</a>
        <div>
        <div class="article">
            <h3><?=$article['title']?></h3>
            <p clas="published">Published:<?=$article['date']?></p>
            <p>
            <?=$article['content']?>
            </p>
            </div>
        </div>
        </div>
             <footer>
    <div class="panel panel-primary">
    <div class="panel-heading">My First Blog <br>Copyright &copy; 2015</div>
    </div>
   </footer>
    </body>
 

</html>