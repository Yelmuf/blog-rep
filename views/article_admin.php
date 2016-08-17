<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf8">
    <title>My first Blog</title>
    <link rel="stylesheet" href="../style.css">
     <link rel="stylesheet"
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>    
     <body>
    <div class="cont">  
     <div class="container">
       
            <h1>My First Blog</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../index.php">Home</a></li>
        <li class="breadcrumb-item active"><a href="../admin/index.php">Administration panel</a></li>
          <li><?=ucfirst(($_GET['action']))?></li>
      </ol>  
           
            <div class>
                <form method="post" action="index.php?action=<?=$_GET['action']?>&id=<?=$_GET['id']?>">

                <div class="form-group">
                    <label>Название статьи</label>
                    <input type="text" class="form-control"  placeholder="Title" name="title"  value="<?=$article['title']?>">
                </div>
                  <div class="form-group">
                    <label>Дата создания</label>
                    <div class="input-group">
                      <input type="date" class="form-control" name="date" value="<?=$article['date']?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Содержание статьи</label>
                    <textarea type="text" class="form-control" placeholder="Content" name="content"><?=$article['content']?></textarea>
                  </div>
                 <input value="Сохранить" type="submit" class="btn btn-primary pull-right">
                </form>
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



