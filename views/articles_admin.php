<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title> My first Blog</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
        <h1>My First Blog</h1>
        <div class="body">
            <a href="index.php?action=add">Add post</a>
            <table class="admin-table">

                <tr>
                    <th>Date</th>
                    <th>Title</th>
                    <th></th>
                    <th></th>
                </tr>
                 <?php foreach($articles as $a): ?>
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td>
                        <a href="index.php?action=edit&id=><?=$a['id']?>">Edit</a>
                    </td>
                    <td>
                       <a href="index.php?action=delete&id=><?=$a['id']?>">Delete</a>
                    </td>

                </tr>
                <?php endforeach ?>
                </table>
            
            
           
       
           
        </div>
        <footer>
        <p>My First Blog <br>Copyright &copy; 2015</p>
        </footer>
        </div>
    </body>

</html>