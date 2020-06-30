<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<?php require __DIR__ . "/../layout/header.php"; ?>

<br />
<br />
<br />
<br />
<br />

<?php if (!empty($error)): ?>
  <p>
    Die Kombination aus Email und Passwort ist falsch.
  </p>
<?php endif; ?>


<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image" 
		style="
			background-image: url(https://source.unsplash.com/aob0ukAYfuI/400x300);
			background-size: cover;
			background-position: center;">
	
	</div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4">Pleas type your email and password</h3>
              <form  method="POST" method="register">
                <div class="form-label-group">
                  <input name="inputEmail" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                  <label for="inputEmail">Email address</label>
                </div>

                <div class="form-label-group">
                  <input name="password" type="password" id="password" class="form-control" placeholder="password" required>
                  <label for="password">Password</label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register</button>
              
                
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php require __DIR__ . "/../layout/footer.php"; ?>
