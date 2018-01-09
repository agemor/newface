<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="login.css">
  </head>

  <body>
    <div class="container">
      <?php
            if(isset($_GET["error"])) { ?>
            <script>alert("비밀번호가 올바르지 않습니다");</script>
            <?php }
      ?>
      <div class="card">

        <form action="./index.php" method="POST">
          <h2 class="form-signin-heading">Login</h2>
          <div class="form-group">
            <label for="id">Email address</label>
            <input type="email" id="id" class="form-control" placeholder="Email address" required autofocus>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" class="form-control" placeholder="Password" required>
          </div>
          <button class="btn btn-outline-primary" type="submit">Sign in</button>
        </form>
      </div>
    </div> <!-- /container -->
  </body>
</html>
