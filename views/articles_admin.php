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
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item active">Administration panel</li>
      </ol>  
        <a href="index.php?action=add" class="btn btn-primary">Add post</a>
        <div class="body">
            
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
                        <a href="index.php?action=edit&id=<?=$a['id']?>">Edit</a>
                    </td>
                    <td>
                       <a href="index.php?action=delete&id=<?=$a['id']?>">Delete</a>
                    </td>

                </tr>
                <?php endforeach ?>
                </table>
            
            
           
       
           
        </div>
        </div>
         <footer>
    <div class="panel panel-primary">
    <div class="panel-heading">My First Blog <br>Copyright &copy; 2015</div>
    </div>
   </footer>
    </body>
   
</html>