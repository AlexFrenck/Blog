<?php require __DIR__ . "/../layout/header.php"; ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>


<div class="card bg-primary text-white" style="width: 50%; float: left; height: 7em; text-align: center;
                        vertical-align: middle; line-height: 3em; font-size: 6em; ">
  <div class="card-body">
    <a style = "color: white" href="posts-admin">
      Posts verwalten
    </a>
  </div>
</div>

<div class="card bg-danger" style="text-align: center; height: 7em; text-align: center;
                        vertical-align: middle; line-height: 6em; font-size: 6em; background-color: #ff0000bd">
  <div class="card-body">
    <a style = "color: white" href="logout">
      Logout
    </a>
  </div>
</div>

<?php require __DIR__ . "/../layout/footer.php"; ?>
</html>