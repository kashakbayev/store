<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
	<title>Log in</title>
	<link rel="stylesheet" href="../css/login.css">
	
</head>
<body>
<script src="../js/login.js"></script>
<section class="vh-100 gradient-custom"> 
  <div class="container py-5 h-90">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="md-5 mt-md-4 pb-4">

              <h2 class="fw-bold mb-2 text-uppercase" id="text">Login</h2>
              <p class="text-white-50 mb-5">Please enter your email and password!</p>

              <div class="form-outline form-white mb-4">
                <input type="email" id="email" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX" id="emailmsg">Enter email address here</label>
              </div>

              <div class="form-outline form-white mb-4">
                <input type="password" class="form-control form-control-lg" id="pass">
                <label class="form-label" for="typePasswordX" id="passmsg">Enter password here</label>
              </div>

              <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="forgotpass.php">Forgot password?</a></p>

              <input class="btn btn-outline-light btn-lg px-5" type="button" id="login" value="Log in">

            </div>

            <div>
              <p class="mb-0">Don't have an account? <a href="signup.php" class="text-white-50 fw-bold">Sign Up</a>
              </p>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>