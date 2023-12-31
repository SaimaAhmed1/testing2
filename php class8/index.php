<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post system</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  

 <!-- Navigation bar start here -->
 <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="#">post system</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Add Post</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">All Posts</a>
        </li>
         </ul>
    
     
    </div>
  </div>
</nav>
<!-- navigation bar ends here -->
<!-- From starts here -->
<div class="card col-lg-5 mx-auto mt-5">
  <div class="card-header">Add post</div>
  <div class="card-body">
   <form action="./controller/storePost.php" method="POST">


    <input value="<?=$_SESSION['old']['title'] ?? ''?>" name="title" type="text" placeholder="post Title" class="form-control my-3">
    <?php
    if(isset($_SESSION['error']['title_error'])) {?>
    <span class="text-danger">
    <?php
    print_r($_SESSION["error"]["title_error"]);
    ?>
    </span>
    <?php
    }
    ?>
    <textarea name="details" placeholder="post details" class="form-control my-3"><?=$_SESSION['old']['details'] ?? ''?>
      
    </textarea>
    <?php
    if(isset($_SESSION['error']['details_error'])) {?>
    <span class="text-danger">
    <?php
    print_r($_SESSION["error"]["details_error"]);
    ?>
    </span>
    <?php
    }
    ?>
    <input value="<?=$_SESSION["old"]['author']?? '' ?>"  name="author" type="text" placeholder="post author" class="form-control my-3" >
    <button type="submit"class="btn btn-primary">Submit</button>

   </form>
  </div>
</div>
<!-- Form end here -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
<?php
session_unset();
?>