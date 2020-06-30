<?php require(__DIR__ . "/../../layout/header.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Alex Blog</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="../../css/clean-blog.min.css" rel="stylesheet">

</head>

<body>
  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <div class="post-preview">
        <?php foreach ($all AS $entry): ?>
        
          <a href="posts-edit?id=<?php echo e($entry->id); ?>">
            <h2 class="post-title">
              <?php echo e($entry->title); ?>
            </h2>
      
          </a>
          <?php endforeach; ?>
          <div class="card bg-success text-white" style="width: 50%;
                      float: left;
                      height: 3em;
                      text-align: center;
                      vertical-align: middle;
                      line-height: 3em; 
                      background-color: #5cb85c;">
              <div class="card-body">
                <a style = "color: white" href="posts-admin-create">
                Post erstellen
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <hr>

  

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 

</body>

</html>


