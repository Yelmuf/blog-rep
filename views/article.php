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
        <footer>
        <p>My First Blog <br>Copyright &copy; 2015</p>
        </footer>
        </div>
    </body>

</html>