<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <!-- Jquery -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/bootstrap.min.css') ?>">
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
    
    <!-- Custom css -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('css/login.css') ?>">
    <script src="<?= base_url('js/script.js') ?>"></script>
    
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="<?= base_url('Login/doLogin') ?>" method="POST">
              <div class="form-label-group">
                <input type="text" name="inputID" class="form-control" placeholder="User ID" required autofocus>
                <label for="inputID">User ID</label>
              </div>

              <div class="form-label-group">
                <input type="password" name="inputPassword" class="form-control" placeholder="Password" required>
                <label for="inputPassword">Password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>