<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="carousel.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="accord.php">Accordion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="index.php">Register</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col col-md-6 col-lg-6 col-xl-6">
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Roll no</td>
                        <td><input type="number" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Admn no</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>College</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>username</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td><input type="password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Confirm password</td>
                        <td><input type="password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">REGISTER</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6 col col-md-6 col-lg-6 col-xl-6">
            <table class="table">
                <tr>
                    <td>Username</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>password</td>
                    <td><input type="password" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-success">LOGIN</button></td>
                </tr>
            </table>
         </div>
        </div>
    </div>
</body>
</html>