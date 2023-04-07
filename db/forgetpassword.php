<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        *{
            font-family: 'Poppins', sans-serif;
        }
        body{
            /* background-color:#eac5ec */
            background-color:#e3b2e6
        }
    </style>
  </head>

  <body>
    <div class="container d-flex flex-column">
      <div class="row align-items-center justify-content-center min-vh-100">
        <div class="col-md-6">
            <img src="../images/fgpass.png" width="80%"/>
        </div>
        <div class="col-md-5">
            <div class="card shadow rounded border-0">
                <div class="card-body">
                    <div class="mb-4">
                        <h5><b>Forgot Password?</b></h5>
                        <p class="mb-2">Enter your registered email ID to reset the password
                        </p>
                    </div>
                    <form>
                        <div class="mb-3">
                            <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email"/>
                        </div>
                        <div class="mb-3 d-grid">
                            <button type="submit" class="btn btn-primary">
                                Reset Password
                            </button>
                        </div>
                        <span>Don't have an account? <a href="#" style="text-decoration:none">Sign In</a></span>
                    </form>
                </div>
            </div>
        </div>
      </div>
    </div>
  </body>

</html>